<?php

/*$hostname = "localhost";
$username = "root";
$password = "";
$db = "appregister";*/
$dbconnect=new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2");
$UserName=$Email=$MobileNo=$Password=$ConfirmPassword=$Sex=$City=$Occupation="";
if ($dbconnect->connect_error) {
echo("error");
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['sendotp'])) {
  $UserName=(string)filter_input(INPUT_POST,'username');
  $Email =(string)filter_input(INPUT_POST,'email');
  $MobileNo = (string)filter_input(INPUT_POST,'mobileno');
  $Password = (string)filter_input(INPUT_POST,'password');
  $ConfirmPassword = (string)filter_input(INPUT_POST,'confirmpassword');
  $Sex = (string)filter_input(INPUT_POST,'sex');
  $City = (string)filter_input(INPUT_POST,'city');
  $Occupation = (string)filter_input(INPUT_POST,'occupation');
 
  echo "";
 
  }


  $query = "INSERT INTO register1 (username,email,mobileno,password,confirmpassword,sex,city,occupation)
 
  VALUES ('$UserName','$Email','$MobileNo','$Password','$ConfirmPassword','$Sex','$City','$Occupation')";

if (!mysqli_query($dbconnect,$query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      header('Location: verify.php');
    }
/*$result= mysqli_query($dbconnect,"select * from register");
while($rows=mysqli_fetch_assoc($result)){  
$a= $rows['username'];
$b= $rows['email'];
$c= $rows['mobilenumber'];
$d= $rows['password'];
$e= $rows['confirmpassword'];
$f= $rows['sex'];
$g= $rows['city'];
$h= $rows['occupation'];


}*/






?>

