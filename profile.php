<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Profile</title>
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
	<div class="profile">
		<div class="avator"><span>Change Avator</span></div>
		<div class="edit tooltip" title="Edit Your Profile"><img src="src/edit.png" />


		</div>
		<?php
			
			$password=$_SESSION['password'];
			$phone=$_SESSION['phone'];
			$query = "select * from users where password='$password' AND phone='$phone'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			
		?>
		<div class="dt name">NAME: <span><?php  echo $rows['name'];  ?></span></div>
		<div class="dt phone">PHONE: <span><?php  echo $rows['phone'];  ?></span></div>
		<div class="dt id">ID. NO: <span><?php  echo $rows['id_no'];  ?></span></div>
		<div class="dt plate">CAR PLATE NO: <span><?php  echo $rows['plate_no'];  ?></div>
		<button style="display:none">Save Changes</button>
		<div id="status"></div>
		<?php  } ?>
	</div>
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
</body>
</html>