<?php
    session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	
	
	
//$dbconnect=new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2");
	$conn=mysqli_connect("localhost","qf8uehkftx8w","Malar1405@");
	mysqli_select_db($conn,"i6001247_mo2");
	$result=mysqli_query($conn,"SELECT * FROM register1 where username = '$username' and password='$password'") 
				or die("Failed to Query database ".mysqli_error());
	$row = mysqli_fetch_array($result);
	if($row['username']==$username && $row['password']==$password ){
	    $_SESSION['username']=$user;
		header("location: index.php");
	} else {
		header("location: loger.html");
		
	}
?>