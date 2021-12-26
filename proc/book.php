 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		
}

if (isset($_POST['submit'])) {
	include('../inc/connect.php');
	include('../inc/insert.php');
	$phone=$_SESSION['phone'];
	$street=$_POST['street'];
	
							date_default_timezone_set('Africa/Nairobi'); // CDT
							$dt=date("m.d.y");
							$format = "H:i";
							$date = date($format, time());
							$tt=$dt.' '.$date;
	
	mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("cpms") or die(mysql_error());
	$sql = "UPDATE users SET pl_booked = 'YES' WHERE phone = '$phone'";
	$table_name='bookings';
	 if (mysql_query($sql))
    {
		$query = "select * from users where phone='$phone'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
				$plate=$rows['plate_no'];
				$status='BOOKED';
			}
		$form_data = array(
	    'phone' => $phone,
		'plate_no'=> $plate,
		'status' => $status,
		'street'=> $street,
		'book_time' => $tt
		
	);
	//echo dbRowInsert($table_name, $form_data);
	$conn->multi_query( dbRowInsert($table_name, $form_data));
	$conn->close();
      header("Location: ../success.php");
    }
	}
	
	//


//
?>