<?php

class css_style {

	public static $style_map = [];

	public static function render() {
		$css = '';
		foreach (self::$style_map as $style => $selectors) {
			$css_selector = self::create_css_selector($selectors);
			// make sure style is a string of the name of the style to use
			$css .= $css_selector . ' {' . PHP_EOL .
					file_get_contents( __DIR__ . '/' . $style) . PHP_EOL .
					'}' . PHP_EOL;
		}
		// echo $css;
		// print_r(self::$style_map);
		echo '<style type="text/css"> ' . $css . ' </style>';
	}

	public static function create_css_selector(array $style_array) {
		return join(', ', $style_array);
	}

}

