<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
			include('inc/connect.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img style="position:absolute; z-index:-1; margin:0;"/>
	<p class="phead">Parking Lots Status</p>
	
	
	<div class="strt">
	<p>CITY HALL STREET</p>
	<table class="gridtable">
<?php $street ="CITY HALL"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	
	
	<div class="strt">
	<p>KIJABE STREET</p>
	<table class="gridtable">
<?php $street ="KIJABE STREET"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	<p class="status">Red -> Reserved/Occupied , Yellow -> Available</p>
	
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>