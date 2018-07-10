<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['firstName'])){

        // Adds name to array
        $data_missing[] = 'First Name';

    } else {

        // Trim white space from the name and store the name
        $firstName = trim($_POST['firstName']);

    }

    if(empty($_POST['lastName'])){

        // Adds name to array
        $data_missing[] = 'Last Name';

    } else{

        // Trim white space from the name and store the name
        $lastName = trim($_POST['lastName']);

    }

    if(empty($_POST['occupation'])){

        // Adds name to array
        $data_missing[] = 'occupation';

    } else {

        // Trim white space from the name and store the name
        $occupation = trim($_POST['occupation']);

    }

    if(empty($_POST['hometown'])){

        // Adds name to array
        $data_missing[] = 'hometown';

    } else {

        // Trim white space from the name and store the name
        $hometown = trim($_POST['hometown']);

    }

    if(empty($_POST['pic'])){

        // Adds name to array
        $data_missing[] = 'profile photo';

    } else {

        // Trim white space from the name and store the name
        $pic = trim($_POST['pic']);

    }

    if(empty($_POST['fatherName'])){

        // Adds name to array
        $data_missing[] = 'Father Name';

    } else {

        // Trim white space from the name and store the name
        $fatherName = trim($_POST['fatherName']);

    }

    if(empty($_POST['mobNo'])){

        // Adds name to array
        $data_missing[] = 'Mobile No.';

    } else {

        // Trim white space from the name and store the name
        $mobNo = trim($_POST['mobNo']);

    }

    if(empty($_POST['permAdd'])){

        // Adds name to array
        $data_missing[] = 'Permanent Address';

    } else {

        // Trim white space from the name and store the name
        $permAdd = trim($_POST['permAdd']);

    }

    if(empty($_POST['city'])){

        // Adds name to array
        $data_missing[] = 'city';

    } else {

        // Trim white space from the name and store the name
        $city = trim($_POST['city']);

    }

    if(empty($_POST['state'])){

        // Adds name to array
        $data_missing[] = 'State';

    } else {

        // Trim white space from the name and store the name
        $state = trim($_POST['state']);

    }

    if(empty($_POST['country'])){

        // Adds name to array
        $data_missing[] = 'country';

    } else {

        // Trim white space from the name and store the name
        $country = trim($_POST['country']);

    }

    if(empty($_POST['adhar'])){

        // Adds name to array
        $data_missing[] = 'adhar';

    } else {

        // Trim white space from the name and store the name
        $adhar = trim($_POST['adhar']);

    }

    if(empty($_POST['gender'])){

        // Adds name to array
        $data_missing[] = 'gender';

    } else {

        // Trim white space from the name and store the name
        $gender = trim($_POST['gender']);

    }

    if(empty($_POST['birthdate'])){

        // Adds name to array
        $data_missing[] = 'birthdate';

    } else {

        // Trim white space from the name and store the name
        $birthdate = trim($_POST['birthdate']);

    }

    if(empty($_POST['nationality'])){

        // Adds name to array
        $data_missing[] = 'nationality';

    } else {

        // Trim white space from the name and store the name
        $nationality = trim($_POST['nationality']);

    }

    if(empty($_POST['children'])){

        // Adds name to array
        $data_missing[] = 'children';

    } else {

        // Trim white space from the name and store the name
        $children = trim($_POST['children']);

    }

    
    if(empty($data_missing)){
        
        require_once('../connect/mysqli_connect.php');
        
        $query = "INSERT INTO `tenant`(`firstName`, `lastName`, `occupation`, `hometown`, `pic`, `fatherName`, `mobNo`, `permAdd`, `city`, `state`, `country`, `adhar`, `gender`, `birthdate`, `nationality`, `children`, `unique_ID`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        
        mysqli_stmt_bind_param($stmt, "ssssssissssisssis", $firstName,
                               $lastName, $occupation, $hometown, $pic,
                               $fatherName, $mobNo, $permAdd, $city,
                               $state, $country, $adhar, $gender, $birthdate, $nationality, $children, $unique_ID);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'You are Succefully Registered! ';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>