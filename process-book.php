<?php
	require('inc\connect.php');
	session_start();
     $email = $_SESSION["email"];
	 $model = $_SESSION["model"];
	  $vehicle = $_SESSION["vehicle"];
	  $status="RESERVED";
	  $plateno = $_SESSION["plateno"];
	  $plot = $_SESSION["plot"];
	  $account = $_SESSION["account"];
	  $street = $_SESSION["street"];
	    $from = $_SESSION["from"];
		 $to = $_SESSION["to"];
		    $charge = "120";
			 $phone = $_SESSION["phone"];
			
			/*CHECK IF RESERVED */
			
$sql="SELECT * FROM zones WHERE street='$street' and plot='$plot' and status='RESERVED'";
$result=mysqli_query($connect, $sql);


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If

if($count==1){
 header('location:error-book.php');
}
else
{

        $query = "INSERT INTO `zones` (phone,status, email, model, vehicle,street,plot,platenumber,account,charge,d1,d2) VALUES ('$phone','$status', '$email', '$model', '$vehicle' , '$street', '$plot', '$plateno', '$account','$charge','$from','$to')";
        $result = mysqli_query($connect, $query);
		
		$var = $_SESSION["from"];
$date = str_replace('/', '.', $var);
echo date('Y.m.d', strtotime($date));
		if($result){
           //REDIRECT
		   header('location:success.php');
		   
exit;
        }
}
    ?>