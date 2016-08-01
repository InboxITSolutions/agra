<?php
require '../../database/conn.php';

$id = $_GET['id'];

mysql_query("DELETE FROM banner WHERE id=$id") or die(mysql_error());
header('Location:../banner');
?>