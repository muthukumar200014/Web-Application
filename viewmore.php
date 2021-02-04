<?php
	$link=new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2") or die('Unable To connect');
?>
<!DOCTYPE html>
<html>

<title>View More</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<style>

body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


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


.chat_button {
  background-color: royalblue;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 0px;
  font-family: arial;
 margin-left: 22%;
}


body {

  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
  padding: 5px;
}

.container {
  position: relative;
}

.mySlides {
  display: none;
}


.cursor {
  cursor: pointer;
}


.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  
}

.column {
  float: left;
  width: 16.66%;
  margin-left:15px;

}

.active,
.demo:hover {
  border: 2px solid black
}

.img1 {
	object-fit:cover;
	
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
  	<button class="login_button"><b>Sell<b></button>  
             </div>

             <!-- LOGIN PAGE FORM-->
             <div class="login">
                  <div id="login" class="w3-modal">
                        <div class="w3-modal-content w3-animate-zoom " style="width: 50%">
               	              <div class="w3-container w3-black">
                     	     <span onclick="document.getElementById('login').style.display='none'" class="w3-button closebtn w3-display-topright w3-large" style="background-color: yellow;width: 50px;height: 50px;margin-right: -2px;margin-top: 0%;cursor: pointer"><p style="font-size: 40px;color: black;margin-top: -60%;cursor: pointer">&times;</p></span>
                    	     <h1 style="text-align: center">Login</h1>
                         	     <p class="w3-opacity" style="text-align: center">GET IN</p>
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
         <form class="example" action="/action_page.php" style="margin:auto;max-width:700px;">
                <input type="text" placeholder="Find Cars, Mobile Phones and more..." name="search2">
                <button type="submit"><i class="fa fa-search"></i></button>
          </form>

          <div class="light" style="margin-top:-1%">
                <br>
          </div>
      </div>


</div>


<!-- APPKART WORD-->
<br><br><br><br><br><br><h3 style="margin-left: 30px;float: left;margin-top: -10px"><b>AppKart</b></h3>

<!-- CLOSE BUTTON-->
<a href="index.php"><i class="fa fa-window-close" style="cursor: pointer;font-size:48px;color:red;float: right;margin-right: 35px;margin-top: -22px"></i></a>


<!-- MAIN PAGE-->
<div class="w3-content" style="max-width:1400px;">
     <div class="w3-row">
             <div class="w3-col l8 s12">
                    <div class="w3-card-4 w3-margin w3-white">
					<?php 
						if(isset($_GET['id'])){
							$id1=$_GET['id'];
							$id2=str_replace("'","","$id1");
							$id2 = (int)$id2;
							$res=mysqli_query($link,"SELECT * from images WHERE id='$id2'");
							foreach ($res as $image1) {
							$temp = $image1["image"];
							$b = str_replace(',', ' ', $temp );
							$str_arr = explode(" ", $b); 
							for($i=1;$i<count($str_arr);$i++) {
								$temp1=count($str_arr);
								if ($temp1<=2) { 
							
					?>
                             <div class="images">
								<div class="container">
									<div class="mySlides">
										<div class="numbertext">  <?php echo($i);?> / <?php echo($temp1-1);?></div>
											<img class="img1" src="../uploads/<?php echo($str_arr[$i]); ?>" style="width:100%">
									</div>
								</div>
							
							</div>
							<?php }  
							else { ?>
							 
							<div class="images">
								<div class="container">
									<div class="mySlides">
										<div class="numbertext"> <?php echo($i);?>/ <?php echo($temp1-1);?></div>
											<img class="img1" src="../uploads/<?php echo($str_arr[$i]); ?>" style="width:100%">
									
								</div>
								  </div> </div> 
							<?php }} 
							if ($temp1>2) { ?>
							<div class="row">
							<?php 
							for($i=1;$i<count($str_arr);$i++) {
								$temp1=count($str_arr);
							?>
								<div class="column">
      						 <img class="demo cursor" src="../uploads/<?php echo($str_arr[$i]); ?>" style="width:100%" onclick="currentSlide(<?php echo($i);?>)"> 
    					            </div>
							
							 
							<?php } ?>
							</div> <?php } ?> 
					       <br> 
  					      

					<script>
					var slideIndex = 1;
					showSlides(slideIndex);

					function plusSlides(n) {
					  showSlides(slideIndex += n);
					}

					function currentSlide(n) {
						//alert(n);
					  showSlides(slideIndex = n);
					}

					function showSlides(n) {
					  var i;	
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("demo");
					  var captionText = document.getElementById("caption");
					  if (n > slides.length) {slideIndex = 1}
					  if (n < 1) {slideIndex = slides.length}
					  for (i = 0; i < slides.length; i++) {
					      slides[i].style.display = "none";
					  }
					  for (i = 0; i < dots.length; i++) {
					      dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";
					  dots[slideIndex-1].className += " active";
					  captionText.innerHTML = dots[slideIndex-1].alt;
					}
					</script>
					</div>
  				<!-- DETAILS AND DESCRIPTION -->
 				 <div class="w3-card-4 w3-margin w3-white">
    				       <div class="w3-container">
				               <br>
      				               <h3><b>Details</b></h3>
        				               <br>
        				               <p style="margin-left: 10px"><b style="color: grey">Brand</b><t style="margin-left: 25px"><?php echo ($image1["category"]);?></t></p>
      				               <p style="margin-left: 10px"><b style="color: grey">Year</b><t style="margin-left: 35px"><?php echo ($image1["year"]);?></t></p> 
      				               <p style="margin-left: 10px"><b style="color: grey">Model</b><t style="margin-left: 23px"><?php echo ($image1["brand"]);?></t></p>
      				               <p style="margin-left: 10px"><b style="color: grey">Fuel</b><t style="margin-left: 37px">Petrol</t></p>
    				        </div> <?php } }?> 
				        <div class="line" style="border: 0.5px solid black;width: 95%;margin-left: 2%"></div>
				                  <br>
   			                                    <div class="w3-container">
 				 	        <h3><b>Description</b></h3>
					        <br>
      					       <?php 
							$str = $image1['description'];
							$arr = explode("\n", $str); 
							for($i=0;$i<count($arr);$i++) {
							?>
      					        <p><?php echo ($arr[$i]);?></p> 
							<?php } ?>
    					</div>
					<br><br>
  			                          </div>
				</div>
				<!-- PRICE BOX -->
				<div class="w3-col l4">
  				        <div class="w3-card w3-margin w3-margin-top">
    				                <div class="w3-container w3-white">
					       <br>
      					       <h3 style="font-family: arial;font-size: 30px"><b>&#8377 <?php echo ($image1["price"]);?></b></h3>
      					       <h4><?php echo ($image1["year"]);?></h4>
      					       <p style="font-size: 17px">Tata aria good condition, no work just buy and drive</p>
					       <br>
    				         </div>
  				</div><hr>
  
  				<!-- SELLER DESCRIPTION -->
  				<div class="w3-card w3-margin">
    				       <div class="w3-container w3-padding" style="background-color: grey;color: white">
      				              <h4 style="text-align: center"><b>Seller description</b></h4>
    				       </div>
    				       <ul class="w3-ul  w3-white">
      				              <li class="w3-padding-16">
        				                    <img src="avatar3.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px">
        				                    <span class="w3-large"><b>Mr. Muthu Kumar</b></span><br>
          				                    <span style="font-family: Arial">+91 91***5**49</span><br><br>
				                    <button class="chat_button"><b>CHAT WITH SELLER</b></button>
				                    <br><br>
      			  	               </li>
    				       </ul>
  				</div><hr> 
 
  				<!-- POSTED IN -->
  				<div class="w3-card w3-margin">
    				      <div class="w3-container w3-padding" style="background-color: grey;color: white">
       				             <h4 style="text-align: center"><b>Posted On</b></h4>
    				      </div>
    				      <div class="w3-container w3-white">
				           <br>
				               
    				           <p style="font-size: 18px"><b>Date: <?php echo ($image1["date"]);?></b></p>
   				           <p style="font-size: 17px">Place: <?php echo ($image1["city"]);?></p>
 				           <br>
    				      </div>
  				</div>
  
			        <!-- END INTRO MENU -->
			       </div>

			<!-- END CARD FOR THE GRID -->
			</div><br>

		             <!-- END CONTENT FOR W3-->
		             </div>

<!-- FOOTER-->
<footer class="w3-container w3-padding-32 w3-dark-grey">
	<br><br><br>
</footer>

<div class="w3-black w3-center w3-padding-24">Powered by <a href="http://theshop.ind.in/" title="Appkart" target="_blank" class="w3-hover-opacity">Appkart</a></div>
	<br>
</div>
<script>
    jQuery(document).ready(function($) {

  if (window.history && window.history.pushState) {

    window.history.pushState('forward', null, './#forward');

    $(window).on('popstate', function() {
      alert('Back button was pressed.');
    });

  }
});
</script>

</body>
</html>
