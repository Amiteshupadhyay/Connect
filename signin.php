<?php
		session_start();
	$user=$_POST['usname'];
	$pass=$_POST['pass'];
	$conn=new mysqli("localhost","root","","userdb");
	$sql="select userName,fullName,emailID,DOB,points,verify from userdetails where BINARY userName='".$user."' and BINARY password='".$pass."'";
	$row=$conn->query($sql);
	$us=mysqli_fetch_array($row);
	
	$count=mysqli_num_rows($row);
	if($count==0)
		echo "1";
	else
	{
		if($us[5]==true)
		{
			setcookie("login",$user,time()+(86400*30));
		$_SESSION["username"]=$user;
		$_SESSION["fullname"]=$us[1];
		$_SESSION["emailid"]=$us[2];
		$_SESSION["birthdate"]=$us[3];
		$_SESSION["points"]=$us[4];
		}else
		echo "0";
	}
$conn->close();
?>