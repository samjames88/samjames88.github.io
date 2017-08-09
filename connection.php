<?php
$host = "localhost";
$bd = "bd";
$user = "userbd";
$password = "111";

$connection = mysql_connect($host, $user, $password) or die ("Error connect server");
$select_bd = mysql_select_db($bd) or die ("Error connection BD");

?>