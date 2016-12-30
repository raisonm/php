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
<?=run_endpoint('box:first/box:box:second/box:xob:box:third/box:xob:xob')?>
</body>
</html>