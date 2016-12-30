<?php



function run_endpoint($server_input_url) {
	$link = trim($server_input_url,'/');
	$url = explode(':', $link);

	$universal_index = 0;
	$boxes = parse_box_url($url, $universal_index);
	// var_dump($boxes);
	$boxes->render();
}

function parse_box_url(array $url, &$index) {
	$boxes = new \box_collection();

	// $index = 0;
	while ($index < count($url)) {
		if ($url[$index] === 'box') {
			// open box
			$index = $index + 1;
			$box = new $url[$index];

			$index = $index + 1;
			if ($url[$index] === 'xob') {
				// close box

				$boxes->addbox($box);
				$index = $index + 1;
			} elseif($url[$index] === 'box') {
				$box->sub_boxes = parse_box_url($url, $index);
				$boxes->addbox($box);

			}
		} elseif ($url[$index] === 'xob') {
			$index++;
			return $boxes;
		}
	}

	return $boxes;

}


?>