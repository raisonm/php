<?php
// This will be the boxes autoloader.
spl_autoload_register(
		function($class_name) {
			include_once('./' . preg_replace('/\\\/', '/', $class_name) . '.php');
		}
	);

?>