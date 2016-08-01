<?php  

/*define("host", "localhost");
define("user", "root");
define("pass", "");
define("db", "hulasmotors");*/
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'agra';
mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

?>