<?php


$dbconnect=new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2");
$UserName=$Email=$MobileNo=$Sex=$City=$Occupation="";
if ($dbconnect->connect_error) {
echo("error");
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['sendotp'])) {
  $UserName=(string)filter_input(INPUT_POST,'username');
  $Email =(string)filter_input(INPUT_POST,'email');
  $MobileNo = (string)filter_input(INPUT_POST,'mobilenumber');
  $Sex = (string)filter_input(INPUT_POST,'sex');
  $City = (string)filter_input(INPUT_POST,'city');
  $Occupation = (string)filter_input(INPUT_POST,'occupation');
 
  echo "";
 
  }


  $query = "INSERT INTO sell (username,email,mobilenumber,sex,city,occupation)
 
  VALUES ('$UserName','$Email','$MobileNo','$Sex','$City','$Occupation')";

if (!mysqli_query($dbconnect,$query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      header('Location: sell1.php');
    }
/*$result= mysqli_query($dbconnect,"select * from sell");
while($rows=mysqli_fetch_assoc($result)){  
$a= $rows['username'];
$b= $rows['email'];
$c= $rows['mobilenumber'];
$e= $rows['sex'];
$f= $rows['city'];
$g= $rows['occupation'];

}*/






?>

