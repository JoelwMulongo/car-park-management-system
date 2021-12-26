<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
	<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label>Recommended Region For You - as per your vehicles body size</label>
	   <select name="street" class="cjComboBox" >
			<option value="CITY HALL">CITY HALL - Cars Only</option>
			<option value="KIJABE STREET">KIJABE STREET - Lories and Cars</option>
			
		</select>
		
		<select name="plot" class="cjComboBox" >
			<option value="PL 001">PL 001</option>
			<option value="PL 002">PL 002</option>
			<option value="PL 003">PL 003</option>
			<option value="PL 004">PL 004</option>
			<option value="PL 005">PL 005</option>
			<option value="PL 006">PL 006</option>
			<option value="PL 007">PL 007</option>
			<option value="PL 008">PL 008</option>
			<option value="PL 009">PL 009</option>
			<option value="PL 010">PL 010</option>
			<option value="PL 011">PL 011</option>
			<option value="PL 012">PL 012</option>
		</select>
		
	<label>Plate Number</label>
	  <input type="text" tabindex="3" name="plateno" placeholder="eg. KAC 123" required>
	  
	<label><strong>Payment Information</strong></label>
	<hr />
	<label>Enter M-pesa Confirmation Number:</label>
	<input type="text" name="account" placeholder="Card Number" required title="Credit card number" maxlength="14"/> 
	 
	   <label>Note: Parking Fees: Ksh. 120/-</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>