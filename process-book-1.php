<?php

$model=$_POST['model'];
$vehicle=$_POST['vehicle'];

session_start();
// Set session variables
$_SESSION["model"] = $model;
$_SESSION["vehicle"] = $vehicle;
//echo "Session variables are set.";
header("location:parking_space.php");

?>