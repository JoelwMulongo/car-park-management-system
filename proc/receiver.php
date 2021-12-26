<?php
   $connection=mysqli_connect("localhost", "root", "", "cpms") or die(mysql_error());
   $name = $_POST['name']; //get posted data
    $phone = $_POST['phone'];  //escape string 
	$idno = $_POST['idno'];  //escape string 
	$plate = $_POST['plate'];  //escape string 

    $sql = "UPDATE users SET name = '$name', id_no = '$idno', plate_no = '$plate' WHERE phone = '$phone'";
       // $sql = "UPDATE content SET text = '$content' WHERE element_id = '2' ";


    if (mysqli_query($connection, $sql))
    {
        echo 1;
    }

?>