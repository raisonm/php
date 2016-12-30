<?php
require_once('./router_utility.php');
require_once('./autoloader.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>TESTING</title>
</head>
<body>
<?=run_endpoint(

	'box:\header\webpage_header_class:xob:' .
	'box:nav_and_feed_container_class:' .
		'box:\nav_bar\nav_bar_class:' .
			'box:\nav_bar\nav_bar_option\nav_bar_option_class:xob:' .
			'box:\nav_bar\nav_bar_option\nav_bar_option_class:xob:' .
			'box:\nav_bar\nav_bar_option\nav_bar_option_class:xob:' .
			'box:\nav_bar\nav_bar_option\nav_bar_option_class:xob:' .
		'xob:' .
		'box:\content_window\main_feed_class:' .
 			'box:\content_window\content_window_class:xob:' .
 			'box:\content_window\content_window_class:xob:' .
 			'box:\content_window\content_window_class:xob:' .
 			'box:\content_window\content_window_class:xob:' .
 			'box:\content_window\content_window_class:xob:' .
 			'box:\content_window\content_window_class:xob:' .
 		'xob:' .
 	'xob'
 	)?>
</body>
</html>