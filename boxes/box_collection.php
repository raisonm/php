<?php


class box_collection {
	// private $position;
	// private $location;

	private $boxes = [];


	public function addbox(\box_class $box, $key = null) {
		if (!empty($key)) {
			// This will overwrite old values associated with the key.
			$this->boxes[$key] = $box;
		} else {
			$this->boxes[] = $box;
		}
	}

	public function removebox(string $key) {
		if (!empty($key)) {
			unset($this->boxes[$key]);
		}
	}

	public function getbox(string $key) {
		if ($this->boxes[$key]) {
			return $this->boxes[$key];
		} else {
			return null;
		}
	}


	public function render() {
		foreach ($this->boxes as $box) {
			$box->render();
		}
	}

	public function return_boxes_array() {
		return (array) $this->boxes;
	}

	// public function populate($obj) {
	// 	foreach ($obj as $key => $value) {
	// 		# code...
	// 	}
	// }
}



?>