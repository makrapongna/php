<?php
$ipdb = "localhost"; 
$userdb = "root";
$passdb = "1234";
$namedb = "test";
//$port = "3306";

$condb = @mysqli_connect($ipdb,$userdb,$passdb,$namedb) or die("Error".@mysqli_error($condb));
@mysqli_query($condb,"SET NAMES UTF8");

?>