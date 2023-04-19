<?php
session_start();

define('HOMEURL','http://127.0.0.1/projectx/');
define('LOCALHOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','fooder');

$conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_connect_error());
$db_select= mysqli_select_db($conn, DBNAME) or die(mysqli_error($conn));

?>