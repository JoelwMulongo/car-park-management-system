<?php
	include('../inc/connect.php');
	include('../inc/insert.php');
	if (isset($_POST['Submit'])) {
	$phone=$_POST['phone'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];
	$plate=$_POST['plate'];
	$email=$_POST['email'];
	$table_name='users';
	
	
	$form_data = array(
	    'name' =>  $fname. ' ' .$lname ,
		'phone' => $phone,
		'username' => $fname,
		'password' => $password,
		'plate_no' => $plate,
		'email' => $email,
		'access' => 2
	);
		
	
	//echo dbRowInsert($table_name, $form_data);
$conn->multi_query( dbRowInsert($table_name, $form_data));
$conn->close();
	
	}
	header("Location: ../index.php");
?>