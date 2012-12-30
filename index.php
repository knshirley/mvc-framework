<?php
define('SERVER_ROOT',  $_SERVER['DOCUMENT_ROOT'] . '/mvc-framework');      
define('SITE_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/mvc-framework');  

//set to default page when loading website
define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_ACTION', 'main');

require("sys/router.php");
?>
