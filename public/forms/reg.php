<?php

$_name = $_POST['name'];
$_email = $_POST['email'];
$_place = $_POST['place'];
$_phone = $_POST['phone'];
$_category = $_POST['category'];
$_link = $_POST['link'];
$_why = $_POST['why'];
$_achievements = $_POST['achievements'];
//$_org = $_POST['org'];
//$image = $_FILES['image']['name'];
//$_myfile = $_FILES['myfile'];
//$target = "uploads/".basename($image);
// database connection

$conn = new mysqli('localhost','root','','einig');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into registration( name, place, email, phone, category, link, why, achievements) values( '$_name','$_place', '$_email', $_phone, '$_category', '$_link', '$_why', '$_achievements' )";
		/*$execval = $stmt->execute();
        echo $execval;*/
        if (mysqli_query($conn, $sql)) {
            echo "Great! Your registration is recorded. We will contact you soon.";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
		echo "Thank you!";
		/*$stmt->close();
    */
   /* if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
    }*/
    
    $conn->close();
	}


 // $result = mysqli_query($db, "SELECT * FROM images");

?>