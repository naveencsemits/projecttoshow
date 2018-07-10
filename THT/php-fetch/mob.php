<?php

if(isset($_POST['insert'])) {
	$connection = mysqli_connect("localhost", "root", "");
	mysqli_select_db($connection, "complete_minor");

	$enteredID = $_POST['unique_ID'];

	$sqlquery = "SELECT * FROM tenant WHERE unique_ID = '$enteredID'";

	$query1 = mysqli_query($connection, $sqlquery);
	$rowcount = mysqli_num_rows($query1);

	if ($rowcount == 0) {
		echo "No data found!";
	}
	else
	{
		while ($row = mysqli_fetch_array($query1)) {
			$fullName = $row['firstName'];
			$fatherName = $row['fatherName'];
			$address = $row['permAdd'];
			$gender = $row['gender'];
			$mob = $row['mobNo'];
			$adhar = $row['adhar'];
			$tenantID = $row['unique_ID'];
			$dob = $row['birthdate'];
			$nationality = $row['nationality'];
			$hometown = $row['hometown'];
			$city = $row['city'];
			$country = $row['country'];
			$state = $row['state'];
			$occupation = $row['occupation'];

			

		}print($mob);
	}



}

?>