<?php 
define('DB_SERVER', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAMA', 'PKbarbershop.sql'); 
$conn = mysqli_connect("localhost", "root","" , "PKbarbershop.sql"); 
if ($conn === false) { 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
?>