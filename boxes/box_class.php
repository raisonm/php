<?php


class box_class {
	// private $position;
	// private $location;

	public static $number_of_boxes;

	public $sub_boxes;
	public $name;

	// public $location = 'center';
	// public $size = ['100%', '100%'];
	// public $clear = '';
	// public $padding = '';
	// public $text_align = '';
	// public $border = '5px solid green';
	// public $float = '';
	// public $align = '';
	// public $margin_left = '0px';

	private $style;
	private $action;
	// public $float = 'left';
	public $view = './box_view.php';

	private $serial_id;

	public function __construct() {
		if (!is_integer(static::$number_of_boxes)) {
			static::$number_of_boxes = 0;
		}

		$this->sub_boxes = new \box_collection();
		$this->serial_id = 'box_' . static::$number_of_boxes;
		static::$number_of_boxes++;
	}

	final public function render() {
		$box = $this;
		include($this->view);
	}

	final public function get_id() {
		return $this->serial_id;
	}

	final public function add_style($style) {
		$this->style = $style;
	}

	public function get_style() {
		return $this->style;
	}

	public function add_action($action) {
		$this->action = $action;
	}

	public function get_action() {
		return $this->action;
	}

}



?>