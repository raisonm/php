<?php

require_once('../boxes/box.php');

// $uri = $_SERVER["PATH_INFO"];

// echo $uri;

/** 
The format I'm going for here is something like:
Page:
--Link:<box/position/size/>
----data:                     //later to be changed to just "index:"
------<index>
--------Link:<box/position/size/>
----------data:
------------<index>:
--------------<html>
------------<END index>:
------------<index>:
--------------<html>
------------<END index>:
----------END data:
--------END box/position/size/
------<END index>
----END data:
--END box/position/size/
**/


$link = trim($_SERVER['PATH_INFO'],'/');
$url = explode(':', $link);

$universal_index = 0;
$boxes = parse_box_url($url, $universal_index);
var_dump($boxes);
// echo get_class($boxes);

function parse_box_url(array $url, &$universal_index) {
	$boxes_array = [];

	$index = 0;
	while ($index < count($url)) { 
		if ($url[$index] === 'box') {
			$box = new \box();
			$box->name = !empty($url[$index + 1]) ? $url[$index + 1] : 'ERROR: no link found...';

			if ($url[$index + 2] === 'xob') {
				// end found
				$box->data = null;
				$boxes_array[] = $box;
				$index = $index + 3;
				$universal_index = $universal_index + 3;
				continue;
			} elseif($url[$index + 2] === 'box') {
				$new_url = array_splice($url, 2);
				$box->data = parse_box_url($new_url, $universal_index);
				$boxes_array[] = $box;
				$index = $index + 2 + $universal_index;
				continue;
			}
		} elseif ($url[$index] === 'xob') {
			// if the current index is on xob, the end of a box, then the url started on a xob. This is incorrect.
			// 

			// $index++;
			// continue;
			break;
		}
	}

	return $boxes_array;

}

// function parse_box_gen_url($link) {
// 	$base = explode('Link:', $link);

// 	foreach ($base as $box_data) {
// 		$teer = explode('index:', trim($box_data,'/'))
// 	}

// }


?>