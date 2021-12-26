<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Booking Date & Time</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('INPUT'), {
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
	<form class="box login" action="process-book-3.php" method="post">
	<fieldset class="boxBody">
	 <label>Specify Date and time to book</label>
	 <label>From:</label>
	<input type="text" name="from"value="02.11.2014 11:05AM">
	<label>To:</label>
	<input type="text" name="to" value="02.11.2014 12:05AM">
	 
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Book" tabindex="4">
	</footer>
</form>
	
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>