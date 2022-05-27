<?php
//including the database connection file
include "connect.php";

//getting id of the data from url
$id = $_GET['id'];

$sqli ="DELETE FROM layanan WHERE id=:id";
$querys =$db->prepare($sqli);
$querys->execute(array(':id' =>$id));

//redirecting to the display page (index.php in our case)
header("Location:index.php");

?>