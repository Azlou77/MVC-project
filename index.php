<?php
define("WEBROOT",str_replace("index.php", "",$_SERVER["SCRIPT_NAME"]));
define("ROOT",str_replace("index.php", "",$_SERVER["SCRIPT_FILENAME"]));
require (ROOT. "core/model.php");
require (ROOT. "core/controller.php");
$params = explode ("/", $_GET["p"]);
print_r($params);
echo ROOT;
?>