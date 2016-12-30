<?php
namespace content_window;

class content_window_class extends \box_class {
	public $location = 'center';
	public $size = ['150px', '150px'];
	public $clear = '';
	public $padding = '';
	public $text_align = '';
	public $border = '5px solid blue';
	public $float = 'left';
	public $align = 'left';
	public $margin_left = '';

	public $view = './content_window/content_window_view.php';
}

?>