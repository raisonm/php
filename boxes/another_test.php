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
'box^
	\custom_boxes\custom_box_class^
	style^width:150px;_height:200px;_position:relative;_border:5px_solid_blue;_align:_left;_float:_left^
xob
')?>
</body>
</html>