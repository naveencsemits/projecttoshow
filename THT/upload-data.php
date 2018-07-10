<!--PHP SCRIPT TO UPLOAD DATA  -->

		<?php
 include 'generate_unique_id.php';

if (isset($_POST['submit'])) {
  $connect = mysqli_connect("localhost", "root", "", "complete_minor")or die("not connected");

   $target="uploads/".basename($_FILES['pic']['firstName']);
   $fname=$_POST["firstName"];
   $lname=$_POST["lastName"];
   $mobNo=$_POST["mobNo"];
   $address=$_POST["permAdd"];
   $city=$_POST["city"];
   $adhar=$_POST["adhar"];
   $occupation=$_POST["occupation"];
   $fatherName = $_POST["fatherName"];
   $state = $_POST["state"];
   $nationality = $_POST["nationality"];
   $country = $_POST["country"];
   $unique_ID = $_POST["unique_ID"];
   $gender = $_POST["gender"];
   $birthdate = $_POST["birthdate"];
   $hometown = $_POST["hometown"];
   $image=$_FILES['pic']['firstName'];

   $query="INSERT INTO `tenant`(`firstName`, `lastName`, `occupation`, `hometown`, `pic`, `fatherName`, `mobNo`, `permAdd`, `city`, `state`, `country`, `adhar`, `gender`, `birthdate`, `nationality`, `unique_ID`) VALUES('$fname','$lname','$occupation','$hometown','$image','$fatherName','$mobNo','$permAdd','$city','$state','$country','$adhar','$gender','$birthdate',,'$nationality','$unique_ID')";
   mysqli_query($connect,$query);
   if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
       echo '<h1 align="center">You are Succefully Registered!</h1><br/> ';

            echo '<h2 align="center">Your unique ID is '.$unique_ID;
   }else{
   	echo "something went wrong";
   }
  }

?>
