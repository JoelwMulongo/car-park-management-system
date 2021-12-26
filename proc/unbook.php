 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$connection = mysqli_connect("localhost", "root", "", "cpms");
	$phone=$_SESSION['phone'];
	$query = mysqli_query($connection, "select * from users where pl_booked='YES' AND phone='$phone'", $connection);
	$rows = mysqli_num_rows($query);
	//echo $rows;
	$row=mysqli_fetch_array($query);
	//if ($rows == 1) {
	
	$sql = "UPDATE users SET pl_booked = 'NO' WHERE phone = '$phone'";
	mysqli_query($connection, $sql);
	$sql = "UPDATE zones SET status = 'UNBOOKED' WHERE phone = '$phone'";
	mysqli_query($connection, $sql);
	 header("Location: ../success_unbook.php");
	//}
		
}