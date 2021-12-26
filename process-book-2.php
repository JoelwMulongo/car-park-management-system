<?php

$street=$_POST['street'];
$plot=$_POST['plot'];
$plateno=$_POST['plateno'];
$account=$_POST['account'];

session_start();
// Set session variables
$_SESSION["street"] = $street;
$_SESSION["plot"] = $plot;
$_SESSION["plateno"] = $plateno;
$_SESSION["account"] = $account;
//echo "Session variables are set.";
header("location:dates.php");

?>