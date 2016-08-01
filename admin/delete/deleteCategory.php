<?php
require '../../database/conn.php';

$id = $_GET['id'];

mysql_query("DELETE FROM category WHERE cat_id=$id") or die(mysql_error());
header('Location:../category');
?>