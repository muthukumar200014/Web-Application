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


<a href="index.php" class="w3-bar-item">
<li onclick="myfunction().style.display='block'" class='fas fa-arrow-left' style='font-size:20px;margin-top: 20px;color: white'></li>
<script>
function myFunction() {
  location.replace("index.php")
}
</script>
</a>
 
  <a href="index.php"><img src="dp3.png" style="width: 90px;margin-left: 0px;margin-top: -10px"></a>  
 
<br>

 </div>
</div>

<br><br><br><br>
<br><br><br><br>
<!-- Code injected by live-server -->
<script type="text/javascript">
// <![CDATA[  <-- For SVG support
if ('WebSocket' in window) {
(function () {
function refreshCSS() {
var sheets = [].slice.call(document.getElementsByTagName("link"));
var head = document.getElementsByTagName("head")[0];
for (var i = 0; i < sheets.length; ++i) {
var elem = sheets[i];
var parent = elem.parentElement || head;
parent.removeChild(elem);
var rel = elem.rel;
if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
}
parent.appendChild(elem);
}
}
var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
var address = protocol + window.location.host + window.location.pathname + '/ws';
var socket = new WebSocket(address);
socket.onmessage = function (msg) {
if (msg.data == 'reload') window.location.reload();
else if (msg.data == 'refreshcss') refreshCSS();
};
if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
console.log('Live reload enabled.');
sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
}
})();
}
else {
console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
}
// ]]>
</script></body>





<br>
<br>
<br>
<br>
<br>
<br>







<p class="w3-opacity" style="text-align: center; font-size: 40px;font-family: tahoma;margin-right: 0px;margin-top: -100px;color: black">REGISTER</p>

     
 
  <form class="w3-container w3-card w3-padding-32 w3-white"; style="margin-left: 10%;margin-right: 10%" margin-down: 5px; name="valForm" action="verify.php" method="POST" onsubmit = "return pass()" >
        <div class="w3-section">
          <label style="margin-left: 22%;font-size: 16px">User name</label>
          <input class="w3-input" name="name" style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color:black" type="text" placeholder="Enter user name" required name="Name">
        </div>

<br>


<div class="w3-section">
          <label style="margin-left: 22%;font-size: 16px">Email Id</label>
          <input class="w3-input" name="email" style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color:black" type="text" placeholder="Enter Email id" required name="Name">
        </div>


<br>


<div class="w3-section">
          <label style="margin-left: 22%;font-size: 16px">Mobile Number</label>
          <input class="w3-input" name="number" style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color:black" type="text" placeholder="Enter your Mobile no" required>
        </div>

<br>

       
        <div class="w3-section">
         <label for="password" style="margin-left: 22%;font-size: 16px">Password</label>
          <input class="w3-input" name="password" id="password-field" style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color: black" type="password"  placeholder="Enter Password" required>
          
          <input type="checkbox" style="margin-left:22%" onclick="show1()">Show Password

 

<script>
function show1() {
  var y = document.getElementById("password-field");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>
 </div>
<br>

 
<div class="w3-section">
          <label style="margin-left: 22%;font-size: 16px">Confirm password</label>
          <input class= "w3-input" id="myInput" name="confirmpassword"  style="width:55%;margin-left: 22%;font-size: 15px;font-family: tahoma;color:black" type="password" placeholder="Enter Confirm password" required>
<input type="checkbox" style="margin-left:22%" onclick="show()">Show Password
 
    <script>
function show() {
  var y = document.getElementById("myInput");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

<script> 
function pass()								 
{ 
	 
	
	var name=document.valForm.name.value;  
	var password=document.valForm.password.value; 
    var secondpassword=document.valForm.confirmpassword.value;  
	var x = document.forms["valForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Not a Valid e-mail address");
    return false; 
  }
	if(password==secondpassword){  
      alert("Password Verified!"); 
      }  
      else{  
      alert("Password must be Same!");  
      return false;  
  }  if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
	

}</script> 



</div>

<br>


 <label style="margin-left: 22%;font-size: 16px">Sex</label>&emsp;
          <label class="radio-inline">
      <input type="radio" name="sex" value="Male"checked>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="sex" value="Female">Female
    </label>
    <label class="radio-inline">
      <input type="radio" name="sex" value="Others">Others
    </label>
   


<br>
<br>
<br>

<label style="margin-left: 22%;font-size: 16px">City</label>&emsp;&emsp;&emsp;&emsp;

<input list="browsers" name="city" placeholder="  SELECT CITY" style="height: 40px;width: 180px;border-color: black;border-radius: 5px;margin-left: 5%">
  <datalist id="browsers">
    <option value="Coimbatore">
    <option value="Chennai">
    <option value="Thirupur">
    <option value="Erode">
    <option value="Salem">
   <option value="Madurai" />
   <option value="Kanyakumari" />
   <option value="Ramanathapuram" />
   <option value="Dindugul" />
   <option value="Puducherry" />
   <option value="Namakal">
    <option value="Perambalur">
    <option value="Thanjavur">
    <option value="Trichy">
    <option value="Thuthukudi">
   <option value="vellore" />
 

  </datalist>
         
<br>
<br>
<br>

<label style="margin-left: 22%;font-size: 16px">Occupation</label>

<input list="occupation" name="occupation" placeholder="  SELECT OCCUPATION" style="height: 40px;width: 180px;border-color: black;border-radius: 5px;margin-left: 5%">
  <datalist id="occupation">
    <option value="Student">
    <option value="Dealer">
    <option value="Self employee">
    <option value="Salary employee">
   
 

  </datalist>



<br>
<br>
<br>
<br>
<br>
<br>

     

         
 
 

        <h4 style="text-align: center"><span style="text-align: center"><button type="submit" name="sendotp" class="w3-button" style="background-color: red;width: 135px;border-radius: 12px;">Send OTP</button></span></h4>


</form>

         





</html>

