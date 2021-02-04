<?php
if(isset($_POST["submit2"])){
	
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
		$name=(string)filter_input(INPUT_POST,'productn');
		$description =(string)filter_input(INPUT_POST,'productd');
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $db=new mysqli("localhost","qf8uehkftx8w","Malar1405@","i6001247_mo2") or die('Unable To connect');
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        //$dataTime = date("Y-m-d H:i:s");
        $insert = "INSERT into photo (name,desciption,picture) VALUES ('$name','$description','$imgContent')";
        if(mysqli_query($db,$insert)){
            header('Location: sellw.html');
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>