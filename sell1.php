<?php
$link = mysqli_connect("localhost","qf8uehkftx8w","Malar1405@");
mysqli_select_db($link,"i6001247_mo2");
?>

<!DOCTYPE html>
<html>
<title>App Kart</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<script src='https://kit.fontawesome.com/a076d05399.js'></script>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>






<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


#menu{
   width: auto;
   float: right;
   margin-top: 20px;
}

#menu li{
     float: left; 
     width: 140px;
     text-align: center;
     list-style: none;
     font-family: tahoma;
     font-size: 26px;
     margin-top: 20px;        
}

#menu li:hover{
     font-size: 35px;

}























.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 12%;
  left: 0%;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>







<body class="w3-light-grey w3-content" style="max-width:1600px;">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-black w3-left-align w3-large" style="height: 87px">


<a href="sell.php" class="w3-bar-item">
<li onclick="myfunction().style.display='block'" class='fas fa-arrow-left' style='font-size:20px;margin-top: 20px;color: white'></li>
<script>
			function myFunction() {
  			location.replace("sell.php")
			} 
		</script>
</a>
 
  <a href="sell1.php"><img src="dp3.png" style="width: 90px;margin-left: 0px;margin-top: -10px"></a>  
 
<br>

 </div>
</div>

<br><br><br><br>
<br><br><br><br>
</body>





<br>
<br>
<br>
<br>
<br>
<br>
<?php
	
	if(isset($_POST['sendotp'])) {
	// Authorisation details.
	//session_start();
	$username = "janakiramankalyanam68@gmail.com";
	$apikey = 'jxTl4XXMWtg-FZjAflps4uWtiKbS5EtSCynmcRYkaO';//api key


	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	$name=$_POST['name'];

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST['number']; // A single number or a comma-seperated list of numbers
	//echo($numbers);
	$otp=mt_rand(10000,99999);
	setcookie("otp",$otp);
	$message = "Hi "   .$name.  "Your OTP is "  .$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&apikey=".$apikey."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
		echo("OTP SENT SUCCESSFULLY");
	curl_close($ch);
	
	
  $UserName=(string)filter_input(INPUT_POST,'name');
  $Email =(string)filter_input(INPUT_POST,'email');
  $MobileNo = (string)filter_input(INPUT_POST,'number');
  $Sex = (string)filter_input(INPUT_POST,'sex');
  $City = (string)filter_input(INPUT_POST,'city');
  $Occupation = (string)filter_input(INPUT_POST,'occupation');
  
  $query = "INSERT INTO sell (username,email,mobilenumber,sex,city,occupation)
 
  VALUES ('$UserName','$Email','$MobileNo','$Sex','$City','$Occupation')";
	
	if (!mysqli_query($link,$query)) {
        die('An error occurred. Your review has not been submitted.');
    } 
		}


?>




<?php

	if(isset($_POST['verifyotp'])) {
	$verotp=$_POST['otp'];
	if($verotp==$_COOKIE['otp']) {
		echo "<script type='text/javascript'>alert('You are registered successfully');window.location.href='sellv.html';</script>";
	}else {
		?>
		<center> <b>ENTER YOUR CORRECT OTP.. </b></center>
	<?php
	}
}

?>










<form method="POST"  action="sell1.php">  


	<div class="w3-section">
          <label style="margin-left: -1%;font-size: 16px"></label>
          <input class="w3-input" name="otp" style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color:black" type="text" placeholder="Enter your OTP">
        </div>
        
        
        










	<h4 style="text-align: center"><span style="text-align: center"><button type="submit" name="verifyotp" class="w3-button" style="background-color: red;width: 135px;border-radius: 12px;">SUBMIT</button></span>
</form>


</body>
</html>
