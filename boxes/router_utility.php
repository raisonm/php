<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<!-- <script type="text/javascript" src="/js/custom_box.js"></script> -->
</head>

<?php

require_once('../style/css_style_class.php');


function run_endpoint($server_input_url) {
	$server_input_url = preg_replace('/\s/', '', $server_input_url);
	$link = trim($server_input_url,'/');
	$link = preg_replace('/\//', '\\', $link);
	// echo $link;
	// exit();

	// echo class_exists('/custom_boxes/custom_box_class');
	// echo class_exists('\custom_boxes\custom_box_class');
	// exit();

	$url = explode(':', $link);

	$universal_index = 0;
	$boxes = parse_box_url($url, $universal_index);
	// var_dump($boxes);

	// echo '<head><script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script></head>';
	// echo '<script type="text/javascript" src="../js/custom_box.js"></script>';
	$boxes->render();
	css_style::render();
	// echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>';
	
}

function parse_box_url(array $url, &$index) {
	$boxes = new \box_collection();

	// $index = 0;
	while ($index < count($url)) {
		if ($url[$index] === 'box') {
			// open box
			// $index = $index + 1;
			// $box = new $url[$index];
			$box = new box_class();

			// lets just start with a single style and a single action for now.

			// Now lets allow for style to be injected into the box as well.
			if ($url[$index + 1] === 'style') {
				$index = $index + 1;
				if ($url[$index + 1] === ''
					| $url[$index + 1] === 'box'
					| $url[$index + 1] === 'xob') {
					// Then ya done fucked up...
					trigger_error('No style found...I expected you to have style...', E_USER_ERROR);
				}
				$index = $index + 1;
				$style = $url[$index];
				// $style = preg_replace('/\_/', ' ', $style);
				$box->add_style($style);
				// echo $url[$index];
			}

			if ($url[$index + 1] === 'action') {
				$index = $index + 1;
				if ($url[$index + 1] === ''
					| $url[$index + 1] === 'box'
					| $url[$index + 1] === 'xob'
					| $url[$index + 1] === 'style') {
					trigger_error('No action found...I expected some action...', E_USER_ERROR);
				}
				$index = $index + 1;
				$action = $url[$index];

				$box->add_action($action);
			}
			// echo get_class($box);
			// echo $url[$index+1];
			// exit();

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