<?php
$link = mysqli_connect("localhost","qf8uehkftx8w","Malar1405@");
mysqli_select_db($link,"i6001247_mo2");
?>

<!DOCTYPE html>
<html>


<head>
<title>App Kart</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


/* NAVIGATION BAR*/
.Navigation_bar{
background-color: black;
width: 100%;
color:white;
float:left;
}


  /* LOGO */
.logo{
float:left;
margin-left: 30px;
margin-top:-0.5%;
}


/* SERACH BAR */
* {
  box-sizing: border-box;
}


/* SERACH AREA */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid black;
  float: left;
  width: 90%;
  background: white;
  margin-left: 5%;
  margin-top: 3%;
  color:black;
}


/* SERACH BUTTON */
form.example button {
  float: left;
  width: 50px;
  padding: 10px;
  background: red;
  color: white;
  font-size: 17px;
  border: 1px solid black;
  border-left: none;
  cursor: pointer;
  margin-left: -49px;
  margin-top: 3%;
}

form.example button:hover {
  background: yellow;
  color:black;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}


/* SLIDER */
  .carousel-inner img {
      width: 100%;
      height: 100%;
}


/* PRICE FILTER */
price {
  float: left;
  padding: 1px 7px;
  text-decoration: none;
  display: block;
  width: 100px;
}


/* SLIDER */
.poda{
text-align: center;
background-color: white;
}


/* LOGIN BUTTON */
.login_button {
  background-color: yellow;
  border: none;
  color: black;
  padding: 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 25px;
   width: 70px;
  float: right;
  margin-top: 20px;
  margin-right: 2%;
}

.login_button:hover{
background-color: lightgrey;
color: black;
}


/* SELL BUTTON*/
.sell_button{
  background-color: red;
  border: none;
  color: white;
  padding: 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 25px;
  width: 65px;
  float: right;
  margin-top: 20px;
  margin-right: 2%;	
}

.sell_button:hover{
background-color: lightgrey;
color: black;
}



/* SIDE BAR  ICONS */
.row {
  display: flex;
  float: right;
}

/* All button */
.all {
  background-color:white;
  border: none;
  color: black;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
  float: right;
  margin-top: -5px;
  margin-right: 15px;
}


.all:hover {background-color:grey; color: black;}  

img {
    width: 200px; 
    height: 200px;
    object-fit: cover;
}


</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- NAVIGATION BAR-->
<div class="w3-top">
       <div class="Navigation_bar">
             <!-- LOGO PAGE-->
             <div class="logo">
                    <a href ="index.php"><img src="dp3.png" style="width: 100px;height:90px;cursor: pointer"></a>
             </div>


            <!-- LOGIN BUTTON-->
            <div class="login_logo">
  	<button onclick="document.getElementById('login').style.display='block' " class="sell_button"><b>Login</b></button>
  	<button class="login_button" onclick="myFunction()"><b>Sell<b></button>  
	<script>
			function myFunction() {
  			location.replace("sell.php")
			}
		</script>
             </div>

             <!-- LOGIN PAGE FORM-->
             <div class="login">
                  <div id="login" class="w3-modal">
                        <div class="w3-modal-content w3-animate-zoom " style="width: 50%">
               	              <div class="w3-container w3-black">
                     	     <span onclick="document.getElementById('login').style.display='none'" class="w3-button closebtn w3-display-topright w3-large" style="background-color: yellow;width: 50px;height: 50px;margin-right: -2px;margin-top: 0%;cursor: pointer"><p style="font-size: 40px;color: black;margin-top: -60%;cursor: pointer">&times;</p></span>
                    	     <h1 style="text-align: center">Login</h1>
                         	     <p class="w3-opacity" style="text-align: center">GET IN TOUCH</p>
             		     <form class="w3-container w3-card w3-padding-32 w3-black" action="login.php">
                    	     <div class="w3-section">
                          	              <label style="margin-left: 12%;font-size: 16px">User name</label>
                                                 <input class="w3-input" style="width:75%;margin-left: 12%;font-size: 15px;font-family: tahoma;color:black" type="text" placeholder="Enter user name" name="username" required name="Name">
                    	      </div>
                      	      <div class="w3-section">
                          	             <label style="margin-left: 12%;font-size: 16px">Password</label>
                         	             <input class="w3-input " id="typepass" style="width:75%;margin-left: 12%;font-size: 15px;font-family: tahoma;color: black" type="password" name="password" placeholder="Enter Password">
                         	             <input type="checkbox" style="margin-left:12%;margin-top: 20px" onclick="Toggle()">Show Password
 	         	             <script>
	              		 function Toggle() {
  	                 		 var x = document.getElementById("typepass");
  	              		 if (x.type === "password") {
  	               		 x.type = "text";
  	              		 } else {
  	             		 x.type = "password";
  	              		 }
	             		 }
                          	              </script>
                                         </div> 
                    	      <br>
                   	      
                    	      <h4 style="text-align: center"><span style="text-align: center"><a href="login.php"><button type="submit" name="submit1" class="w3-button" style="background-color: red;width: 110px;color:white">Login</button></a></span></h4>
                                         </form>
                    	      
                   	     <br>
                   	     <h4 style="text-align: center"><a href="register.php">New User?</a> </h4>
                    	     <br>
                                </div>
                         </div>
                </div>
          </div>

          <!-- SEARCH BAR-->
          <form class="example" style="margin:auto;max-width:700px;">
                <input type="text"id="txt" placeholder="Find Cars, Mobile Phones and more..." list="datalist1" autocomplete="off"/>
				<datalist id="datalist1">
					<option value="Properties">
					<option value="Cars">
					<option value="Furniture">
					<option value="Electronics">
					<option value="Mobiles">
					<option value="Bikes">
					<option value="Books">
					<option value="Fashion">
				</datalist>
                <button type="reset" onclick="getval()"><i class="fa fa-search"></i></button>
				<script>
					function getval()
					{
					var txt=document.getElementById('txt').value;
					if(txt=="Properties"){
						window.location.replace('olxprop.php');
					}
					if(txt=="Cars"){
						window.location.replace('olxcar.php');
					}
					if(txt=="Furniture"){
						window.location.replace('olxfurn.php');
					}
					if(txt=="Electronics"){
						window.location.replace('olxelec.php');
					}
					if(txt=="Mobiles"){
						window.location.replace('olxmobile.php');
					}
					if(txt=="Bikes"){
						window.location.replace('olxbike.php');
					}
					if(txt=="Books"){
						window.location.replace('olxbook.php');
					}
					if(txt=="Fashion"){
						window.location.replace('olxfashion.php');
					}
					}
							
				</script>
          </form>

          <div class="light" style="margin-top:-1%">
                <br>
          </div>
      </div>
</div>


<br><br><br>

<!-- LEFT SIDE BAR-->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:203px;margin-top: 40px" id="mySidebar"><br>
<br>
         <!-- PRICE RANGE FILTER-->
        <ul>
               <a href="#home" style="margin-top: -23px;margin-left: 20px;font-family:sans-serif;background-color:white;color: blue;cursor: context-menu;text-decoration:none;font-size: 15px"><b>PriceFilter</b></a>
        </ul>
        
        <form action="" method="POST">
        <price><input class="w3-input w3-border" type="text" placeholder="Min" required name="Min" id="Min" style="height: 31px" autocomplete="off" ></price>
        <price><input class="w3-input w3-border" type="text" placeholder="Max" required name="Max" id="Max" style="height: 31px" autocomplete="off"></price>     
        <button class="w3-button w3-hover-yellow" type="submit" name="submit" style="margin-left:75px;font-size:14px;margin-top: 15px;background-color: red;color: white"><b>Go</b></button>     
		</form>
        <br><br><br>

         <div class="line" style="border: 0.5px solid black;margin-top: -40px">
        </div>

        <br>


        <!-- CATEGORY-->
  
         <h4 style="text-align: center;margin-top: 5px;float: left;margin-left: 20px">Category</h4>
		 <button class="all" onclick="myFunction1()"><b>All</b></button>
		 <script>
			function myFunction1() {
  			location.replace("index.php")
			}
		</script>
         <br><br><br>
         <div class="row">
              <div class="column1">
    	  <img onclick="window.location.href='olxprop.php';"src="icon1.jpg" alt="Properties" style="width:45px;height: 45px;border-radius: 50%;margin-right: 50px;cursor:pointer">
    	  <figcaption style="margin-left: -7px;font-family:Arial;font-size: 14px">Properties</figcaption>
              </div>
              <div class="column2">
                     <img onclick="window.location.href='olxcar.php';" src="icon2.png" alt="Cars" style="width:45px;height: 45px;border-radius: 50%;margin-right: 45px;cursor:pointer">
    	   <figcaption style="margin-left: 7px;font-family:Arial;font-size: 14px">Cars</figcaption>
               </div>
        </div>

        <br><br><br><br><br>

        <div class="row">
                <div class="column1">
                     <img onclick="window.location.href='olxfurn.php';" src="icon3.jpg" alt="Furniture" style="width:45px;height: 45px;border-radius: 50%;margin-right: 40px;cursor:pointer">
                     <figcaption style="margin-left:-7px;font-family:Arial;font-size: 14px">Furniture</figcaption>
              </div>
              <div class="column2">
                      <img onclick="window.location.href='olxelec.php';" src="icon4.jpg" alt="Electronics" style="width:45px;height: 45px;border-radius: 50%;margin-left: 15px;cursor:pointer">
                     <figcaption style="margin-right: 25px;font-family:Arial;font-size: 14px">Electronics</figcaption>
             </div>
         </div>

         <br><br><br><br><br>

         <div class="row">
                <div class="column1">
                      <img onclick="window.location.href='olxmobile.php';" src="icon5.jpg" alt="Mobiles" style="width:47px;height: 45px;border-radius: 50%;margin-right: 55px;cursor:pointer">
  	    <figcaption style="margin-left: -3px;font-family:Arial;font-size: 14px">Mobiles</figcaption>
                </div>
                <div class="column2">
    	    <img onclick="window.location.href='olxbike.php';" src="icon6.png" alt="Bikes" style="width:45px;height: 45px;border-radius: 50%;margin-right: 40px;cursor:pointer">
                     <figcaption style="margin-left: 5px;font-family:Arial;font-size: 14px">Bikes</figcaption>
                </div>
         </div>


         <br><br><br><br><br>


          <div class="row">
  	<div class="column1">
   	      <img onclick="window.location.href='olxbook.php';" src="icon8.png" alt="Books" style="width:45px;height: 45px;border-radius: 50%;margin-right: 50px;cursor:pointer">
   	      <figcaption style="margin-left: 0px;font-family:Arial;font-size: 14px">Books</figcaption>
                  </div>
  	<div class="column2">
   	     <img onclick="window.location.href='olxfashion.php';" src="icon7.jpg" alt="Fashion" style="width:45px;height: 45px;border-radius: 50%;margin-right: 40px;cursor:pointer">
    	     <figcaption style="margin-left: -2px;font-family:Arial;font-size: 14px">Fashion</figcaption>
  	</div>
          </div> 
</nav>



<!--CLOSING THE SIDE BAR WHEN IT IS IN OPEN ON TAB AND MOBILE VIEW -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



<!--MAIN PAGE CONTENT -->
<div class="w3-main" style="margin-left:205px"> 

        <!-- HEADER APGE FOR SLIDER,SIDE BAR ICON ,APPKART -->
        <header id="portfolio">
                 <div class="container">  
  	      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()" style="position:fixed"><i class="fa fa-bars" style="margin-left: -3%;margin-top: 115px"></i></span>
                        <span class=" w3-hide-large w3-xxlarge w3-right"><h3 style="margin-top: 130px"><b style="font-size: 25px;margin-right: 5px">AppKart</b></h3></span>

                  </div>
                  <div class="w3-section w3-bottombar w3-padding-16">
	        
                         <!--SLIDER -->
	        <div class="w3-container" style="margin-top: 10px">
		<div id="demo" class="carousel slide" data-ride="carousel">
  		        <div class="carousel-inner">
     			<div class="carousel-item active">
     			        <a href=""><img src="slider4.jpg" alt="Los Angeles" width="1100" height="500"></a>
    		  	</div>
    			<div class="carousel-item">
      			         <a href=""><img src="slider5.jpg" alt="Chicago" width="1100" height="500"></a>
   			</div>
    			<div class="carousel-item">
      			          <a href=""><img src="slider6.jpg" alt="New York" width="1100" height="500"></a>
    			</div>
				<div class="carousel-item">
      			          <a href=""><img src="slider7.jpg" alt="New York" width="1100" height="500"></a>
    			</div>
  		         </div>
  
                                   <!--LEFT RIGHT CONTROL BUTTON -->
             	             	<a class="left carousel-control" href="#demo" data-slide="prev">
     	             	<span class="glyphicon glyphicon-chevron-left"></span>
      	             	<span class="sr-only">Previous</span>
	             	</a>
	             	<a class="right carousel-control" href="#demo" data-slide="next">
      	             	<span class="glyphicon glyphicon-chevron-right"></span>
      	             	<span class="sr-only">Next</span>
    	             	</a>
                           </div>
                   </div>
         </header>

         <!-- First Photos-->
         <div class="w3-main" style="margin-left:10px">
                   <br><br><br>
                   <!-- Product grid -->
                  
				 
					<div class="w3-row-padding">
   
			<?php 
						if (isset($_POST['submit'])) { 
						$min = $_POST['Min'];
						$max = $_POST['Max'];
						//echo $min . " " . $max; 
						
						if ($min!=0 && $max!=0 && $min<=$max) {
								$res=mysqli_query($link,"SELECT * from images WHERE category='Fashion' and price BETWEEN '$min' and '$max' ORDER BY id DESC");
								$row_cnt = $res->num_rows;
								if($row_cnt) {
								foreach ($res as $image1) {
								$temp = $image1["image"];
								$b = str_replace(',', ' ', $temp );
								$str_arr = explode(" ", $b); 
						?>
						
						<div class="col-md-3 col-sm-4 col-xs-6" style="margin-bottom:5px;margin-top:2px">
						<div class="w3-container w3-white">
						<img src="../uploads/<?php echo($str_arr[1]); ?>" alt="" id="id"  style="width:100%;cursor:pointer" onclick="clic(<?php echo($image1['id']); ?>);" />
						<p style="font-family: verdana;font-size: 18px;text-align: center;margin-top: 0px"><?php echo $image1["category"];  ?></p> 
						<p style="margin-top: 5px;text-align: center;color: blue"><i class="fa fa-rupee" style="font-size:18px"></i><b style="font-size:19px;font-family: tahoma"><?php echo $image1["price"];  ?></b></p>
						</div>
						</div> 
				<?php
						} }
						else { ?>
							<center> <b>NO RECORDS FOUND</b></center>
						<?php } }
						elseif($min>$max){
							echo "<script type='text/javascript'>alert('Enter the correct values.');window.location.href='olxfashion.php';</script>";
						}	}
						
							else {
							$res=mysqli_query($link,"SELECT * from images WHERE category='Fashion' ORDER BY id DESC");
								foreach ($res as $image1) {
								$temp = $image1["image"];
								$b = str_replace(',', ' ', $temp );
								$str_arr = explode(" ", $b); 
						
					?>
				<div class="col-md-3 col-sm-4 col-xs-6" style="margin-bottom:5px;margin-top:2px">
				<div class="w3-container w3-white">
				<img src="../uploads/<?php echo($str_arr[1]); ?>" alt="" id="id"  style="width:100%;cursor:pointer" onclick="clic(<?php echo($image1['id']); ?>);" />
				<p style="font-family: verdana;font-size: 18px;text-align: center;margin-top: 0px"><?php echo $image1["category"];  ?></p> 
				<p style="margin-top: 5px;text-align: center;color: blue"><i class="fa fa-rupee" style="font-size:18px"></i><b style="font-size:19px;font-family: tahoma"><?php echo $image1["price"];  ?></b></p>
				</div>
				</div> 
							<?php } } ?>
 
	</div>


    </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-dark-grey">
	<br><br><br>
</footer>

<div class="w3-black w3-center w3-padding-24">Powered by <a href="index.php" title="Appkart"  class="w3-hover-opacity">Appkart</a></div>
	<br>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function clic(key) {
  window.location.replace("/viewmore.php?id='"+key+"'");
  
}

</script>

</body>
</html>
