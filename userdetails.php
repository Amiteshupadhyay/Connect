<?php
	session_start();
	
		$user=$_SESSION["username"];
		
	?>
<?php

	$conn=new mysqli("localhost","root","","userdb");
	$sql="select * from userdetails where userName='".$user."'";
	$row=$conn->query($sql);
	$mem=mysqli_fetch_array($row);
	$_SESSION["fullname"]=$mem[1];
	$_SESSION["emailid"]=$mem[2];
	$_SESSION["birthdate"]=$mem[4];
	$_SESSION["points"]=$mem[6];
	$conn->close();
	header("Location:user.php");


?>