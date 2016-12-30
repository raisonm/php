<?php

/**
header class with a lot of static sort of stuff.
**/

class header_class {

	public static $instance;

	private $css = [];

	public static function get_instance() {
		if (empty(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct() {
		if (empty(self::$instance)) {
			self::$instance = new self();
		}
	}

	public function add_css($url_to_css) {
		$css[] = include($url_to_css);
	}

	public function render_css() {
		$html = '<head>';
		foreach ($this->css as $file) {
			$html .= $file;
		}
		$html = '</head>';
		echo $html;
	}

}

?>