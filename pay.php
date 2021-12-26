<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pay | Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div>
		<p class="phead">Pay Parking Fees</p>
		<section class="parking">
			<ol>
				<li>Go to m-pesa on your phone</li>
				<li>Select Pay Bill</li>
				<li>Enter Business no: 123123</li>
				<li>Enter your phone no as the account number</li>
				<li>Enter amount Ksh. 130</li>
				<li>Enter your pin no and confirm</li>
				<li>Then click the Finish button below to complete your booking.</li>
			
			</ol>
			<a href="success.php" >Finish </a>
		</section>
	</div>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>