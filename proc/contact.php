<?php
	include('../inc/connect.php');
	include('../inc/insert.php');
	session_start();
	if (isset($_POST['submit'])) {
	$phone=$_POST['phone'];
	$name=$_POST['name'];
	$msg=$_POST['msg'];
	$table_name='messages';
	
	date_default_timezone_set('Africa/Nairobi'); // CDT
							$dt=date("m.d.y");
							$format = "H:i";
							$date = date($format, time());
							$tt=$dt.' '.$date;
	
	$form_data = array(
	    'name' =>  $name,
		'phone' => $phone,
		'msgdate' => $tt,
		'msg' => $msg
		
	);
		
	
	//echo dbRowInsert($table_name, $form_data);
$conn->multi_query( dbRowInsert($table_name, $form_data));
$conn->close();
	echo "<script>alert('Successfully send message!')</script>";
	echo "<script>window.location='../contact.php'</script>";
	}
	
?>