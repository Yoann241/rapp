<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'bibliothDB');
define('DB_USER','root');
define('DB_PASSWORD','MICHEL Hardy');

$con=mysqli_connect('localhost','root','MICHEL Hardy') or die;
$db=mysqli_select_db($con,'bibliothDB') or die;
?>