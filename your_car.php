<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
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
	
	<form class="box login" action="process-book-1.php" method="post">

	<fieldset class="boxBody">
	<label><strong>Describe your Vehicle</strong></label>
	<hr />
	  <label>Model</label>
	  <input type="text" tabindex="1" name="model" placeholder="eg. Toyota Allion" required>
	  <label>Vehicle Type</label>
	   <select name="vehicle" class="cjComboBox" >
			<option value="volvo">Car</option>
			<option value="saab">Lorry</option>
			<option value="saab">Trailer</option>
			</select>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed" tabindex="4">
	  <?php
	  //Values
	  ?>
	</footer>
</form>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>