<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

        <title> Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- core css -->
        <link rel="stylesheet" type="text/css" href="css/default.css"/>

        <!-- Bootstrap Core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    </head>
    <body>    

    <div id="mainPage">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="index.php"><span><b>TENANT HISTORY TRACKER - REGISTRATION</b></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a  href="admin.php">FOR PROFESSIONAL</a>
                    </li>
                    <li>
                        <a  href="registration-form.php">FOR TENANT</a>
                    </li>
                    <li>
                        <a  href="#">DEMO</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    </div>


    <div class="container">
        

        <form action="submitdata.php" class="register" method="post">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Basic Information
                </legend>
                <p>
                    <label>First Name
                    </label>
                    <input type="text" name="firstName" />
                    <label>Last Name
                    </label>
                    <input type="text"/ name="lastName">
                </p>
                <p>
                    <label>Occupation
                    </label>
                    <input type="text" name="occupation" />
                    <label>HomeTown
                    </label>
                    <input type="text" name="hometown" />
                                      
                </p>
                <p>
                    <label>Profile Photo
                    </label>
                    <input type="file" name="pic" >
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Father's Name
                    </label>
                    <input type="text" class="long" name="fatherName" />
                </p>
                <p>
                    <label>Mobile No. *
                    </label>
                    <input type="text" maxlength="10" name="mobNo" />
                </p>
                <p>
                    <label >Permanent Address *
                    </label>
                    <input type="text" class="long" name="permAdd" />
                </p>
                <p>
                    <label>City *
                    </label>
                    <input type="text" class="long" name="city" />
                </p>
                <p>
                    <label>State *
                    </label>
                    <select name="state">
                        <option>
                        </option>
                        <option value="Madhya pradesh">Madhya Pradesh
                        </option>
                    </select>
                </p>
                <p>
                    <label>Country *
                    </label>
                    <select name="country">
                        <option>
                        </option>
                        <option value="India">India
                        </option>
                    </select>
                </p>
                <p>
                    <label >Aadhar Number *
                    </label>
                    <input class="long" type="text" name="adhar" />

                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input type="radio" id="male" value="male" name="gender" />
                    <label for="male" class="gender">Male</label>
                    <input type="radio" id="female" value="female" name="gender" />
                    <label for="female" class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *(In DD/MM/YYYY)
                    </label>
                   <input type="text" name="birthdate" value="">
                <p>
                    <label>Nationality *
                    </label>
                    <select name="nationality" name="nationality">
                        <option value="0">
                        </option>
                        <option value="Indian">Indian
                        </option>
                    </select>
                </p>
               
                <div class="infobox"><h4>Helpful Information</h4>
                    <p>This Page is For registration of Tenant/servant to generate their own UNIQUE TENANT ID. This unique ID will be useful for professionals and personals to get themselves verified and transparent from legal informtion.</p>
                </div>
            </fieldset>
            
           <div>
               <input type="submit"  name="submit" value="Register >>">
           </div>
        </form>
    </div>
        
    </body>

</html>





