<?php
namespace nav_bar;

class nav_bar_class extends \box_class {

	public $location = 'center';
	public $size = ['250px', ''];
	public $clear = ''; // left
	public $padding ='';
	public $text_align = 'left';
	public $border = '5px solid black';
	public $float = 'left';

	public $view = './nav_bar/nav_bar_view.php';

}

?>