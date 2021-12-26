<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Account</title>
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
	
		<div class="left-signup">
		</div>
		<div class="left-signup">
		<p class="head">New Account Registration</p>
		<form id="registration" action="proc/reg.php" method="post">
			<input type="text" name="fname" value="" placeholder="First Name" required/>
			<input type="text" name="lname" value="" placeholder="Last Name" required/>
			<input type="text" name="email" value="" placeholder="Email Address" required/>
			<input type="text" name="phone" value="" placeholder="Phone Number" required/>
			<input type="password" name="password"value="" placeholder="Password" required/>
			<input type="text" name="plate" value="" placeholder="Car No." required/>
			<input type="Submit" name="Submit" value="Create Account"/>
				
		</form>
		</div>
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
</body>
</html>