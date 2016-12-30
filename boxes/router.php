<?php

require_once('./autoloader.php');
require_once('./router_utility.php');

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

run_endpoint($_SERVER['PATH_INFO']);

?>