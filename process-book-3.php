<?php

$from=$_POST['from'];
$to=$_POST['to'];

session_start();
// Set session variables
$_SESSION["from"] = $from;
$_SESSION["to"] = $to;
//echo "Session variables are set.";
header("location:process-book.php");

?>