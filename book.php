<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>K.Education E-learning</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
			include('inc/connect.php');			
	?>
	
	<section id="content">
	<p class="phead"> Booking Parking Lot</p>
	<div id="book" class="p1">
	<?php  
			$query = "select * from streets where street='CITY HALL'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			echo '<p>CITY HALL : '.$rows['available'].' PL Available</p>';
			}
			$query = "select * from streets where street='KIJABE ST'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			echo '<p>KIJABE ST : '.$rows['available'].' PL Available</p>';
			}
	?>
		
		
	</div>
	<form id="book" action="proc/book.php" method="POST">
		<label>Please select street:</label>
		
				<select name="street">
					<option value="CITY HALL">CITY HALL</option>
					<option value="KIJABE ST">KIJABE STREET</option>
				  
				</select>
			
		<label>Regular Hours:</br> 6:00AM - 6:00PM</label></br>
		
		<input type="submit" name="submit" value ="BOOK NOW" style="margin-left:50px; margin-top:5px; padding:3px;" />
	</form>
	<div id="book">
		<p>Parking fees: KSH. 130/- non-refundable.</p>
		
	</div>
	</section>
	</section>
</body>
</html>