<?php
$db = new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2") or die('Unable To connect');
if(isset($_POST["submit2"])) {
    $uploads_dir = 'uploads/';
    $images_name ="";
    foreach ($_FILES["image"]["error"] as $key => $error) {
        //echo $error;
        if ($error == UPLOAD_ERR_OK) {
            //$date= date("d/m/Y");
			$category=(string)filter_input(INPUT_POST,'category');
			$brandtype=(string)filter_input(INPUT_POST,'brand');
            $brand=(string)filter_input(INPUT_POST,'brandn');
			$year=(string)filter_input(INPUT_POST,'year');
			$price=(integer)filter_input(INPUT_POST,'price');
			$city=(string)filter_input(INPUT_POST,'city');
            $description =(string)filter_input(INPUT_POST,'productd');
            $tmp_name = $_FILES["image"]["tmp_name"][$key];
            $name = $_FILES["image"]["name"][$key];
            // echo $tmp_name;
            // echo $name;
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            $images_name =$images_name.",".$name; 	
			
			$str_arr = explode (",",$images_name);  
			
			
        }
        else{
            echo "<script type='text/javascript'>alert('Please select an image file to upload.');window.location.href='sellv.html';</script>";
            // header('Location: sellv.html');
            // echo $key;
        }
    }
    
}

	if($images_name!="") {

			$insert="INSERT INTO images(category,brandtype,brand,year,price,city,description,image,date) values('$category','$brandtype','$brand','$year','$price','$city','$description','".$images_name."',NOW())";

            if(mysqli_query($db,$insert)){
                echo "<script type='text/javascript'>alert('File uploaded successfully.');window.location.href='index.php';</script>";
            }else{
                echo "File upload failed, please try again.";
            }
}
            
?>