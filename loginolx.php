<?php

$dbconnect=new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2");
$UserName=$Password="";
if ($dbconnect->connect_error) {
echo("error");
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $UserName=(string)filter_input(INPUT_POST,'username');
  $Password = (string)filter_input(INPUT_POST,'password');
 
 
  echo "";
 
  }


  $query = "INSERT INTO login (username,password)
 
  VALUES ('$UserName','$Password')";

if (!mysqli_query($dbconnect,$query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
    //   echo " DB updated";
        header('Location: index.php');
    }
$result= mysqli_query($dbconnect,"select * from login");
while($rows=mysqli_fetch_assoc($result)){  
$a= $rows['username'];
$b= $rows['password'];


}






?>

