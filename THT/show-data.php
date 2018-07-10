

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>TENANT PROFILE</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin-include-files/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="admin-include-files/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="admin-include-files/css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="admin-include-files/css/style.css" rel="stylesheet">
</head>
<body>


<div id="mainPage">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="index.php"><span><b>TENANT HISTORY TRACKER</b></span></a>
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
<br>
   <div align="center">
    <form  action="tht.php" method="POST">
       <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Tenant Profile Page</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <div class="img-circle" width = "200" height = "200">
                <div class="col-md-3 col-lg-3 " align="center" > 
                <img src="uploads/tenant-pic.jpg" style="width: 200px; height: 200px; background-size: cover; display: block; border-radius: 100px; -webkit-border-radius: 100px; -moz-border-radius: 100px;" />
                
                  </div>
                </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>

<!-- use this<?php  echo  $row['fname'];  ?> -->
                     <tr>
                        <td>Name</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/name.php';
                         
                          ?>

                        </td> 
                      </tr>

                      
                      <tr>
                        <td>Date of Birth</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/dob.php'; ?>

                        </td> 
                      </tr>

                      <tr>
                        <td>Nationality</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/nationality.php';?>

                        </td> 
                      </tr>

                      <tr>
                        <td>Unique Tenant ID:</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/tenantID.php'; ?>

                        </td> 
                      </tr>

                      <tr>
                        <td>Occupation</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/Occupation.php'; ?>

                        </td> 
                      </tr>

                      <tr>
                        <td>Hometown</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/hometown.php'; ?>

                        </td> 
                      </tr>

                      <tr>
                        <td>Father Name</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/father.php'; ?>

                        </td> 
                      </tr>

                      
                      </tr>
                      <td>Mobile Number</td>
                      <td>
                        <?php include 'php-fetch/mob.php';?>
                      </td>
                      <tr>
                        <td>Permanent Address: </td>
                        <td>
                          <?php include 'php-fetch/address.php'; ?>
                        </td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>City: </td>
                        <td>
                          <?php include 'php-fetch/city.php'; ?>

                        </td>
                      </tr>
                        <tr>
                        <td>State</td>
                        <td>
                          <?php include 'php-fetch/state.php'; ?>


                        </td>
                      </tr>


                      <tr>
                        <td>Country</td>
                        <td>

                        <!-- Name script -->
                         <?php include 'php-fetch/country.php';  ?>
                         

                        </td> 
                      </tr>



                      <tr>
                        <td>AADHAR No.</td>
                        <td>
                          <?php include 'php-fetch/adhar.php'; ?>
                        </td>
                      </tr>
                           
                      </tr>
                     
                    </tbody>

                    <tr>
                        <td>CRIMINAL STATUS: </td>
                        <td><?php include 'php-fetch/criminal_data.php'; ?></td>
                      </tr>
                  </table>
                </div>
              </div>
            </form>
            </div>
   </div>


   <!-- JQuery -->
    <script type="text/javascript" src="/admin-include-files/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="admin-include-files/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="admin-include-files/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="admin-include-files/js/mdb.min.js"></script>
          
</body>
</html>
