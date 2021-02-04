<?php
$success = "";
$error_message = "";
$conn = mysqli_connect("localhost","qf8uehkftx8w","Malar1405@");
mysqli_select_db($conn,"i6001247_mo2");
if(isset($_POST["submit_email"])) {
    session_start();
    $_SESSION["email"] = $_POST["email"];
	$result = mysqli_query($conn,"SELECT * FROM register1 WHERE email='" . $_POST["email"] . "'");
	$count  = mysqli_num_rows($result);
	//echo($count);
	if($count>0) {
		// generate OTP
		$otp = rand(100000,999999);
		// Send OTP
		//echo($otp);
		$email=$_POST["email"];
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "janakiakash68@gmail.com";
        $to = $email;
        //echo($to);
        $subject = "Verification Code";
        $message = "Verification Code for changing the password is:  " . $otp;
        $headers = "From:theshop";
        mail($to,$subject,$message, $headers); 
        //echo "The email message was sent.";
        echo "<script type='text/javascript'>alert('Verification code has sent to your mail.');window.location.href='testmail.php';</script>";
        $cnt = 1; 
		
		
		if($cnt == 1) {
			$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			$current_id = mysqli_insert_id($conn);
			if(!empty($current_id)) {
				$success=1;
			}
		}
	} else {
		echo "<script type='text/javascript'>alert('You have not registered yet.');window.location.href='register.php';</script>";
	}
}
if(isset($_POST["submit_otp"])) {
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
		header( "refresh:1;url=newpass.php" );
	} else {
		$success =1;
		echo "<script type='text/javascript'>alert('Invalid OTP.');window.location.href='testmail.php';</script>";
	}	
}
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
<form method="POST"  action="testmail.php">  

    <center><b>Verification Code will be sent to your mail within 2 minutes.</b></center>
	<div class="w3-section">
          <label style="margin-left: -1%;font-size: 16px"></label>
          <input class="w3-input" name="otp" style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color:black" type="text" placeholder="Verification Code..">
        </div>
    
        
        
        










	<h4 style="text-align: center"><span style="text-align: center"><button type="submit" name="submit_otp" class="w3-button" style="background-color: red;width: 135px;border-radius: 12px;">SUBMIT</button></span>
</form>


</body>
</html>
