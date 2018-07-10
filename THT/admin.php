<!DOCTYPE html>
<html>
<head>
	<title>
		Admin - Panel
	</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Tenant History Tracker</title>

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
<br><br>
<div class="container">
<div class="row">
	

	<!-- MAIN CONTENT -->
	<div class="card" class="col-lg-10">
    <div class="card-block">
    <h1 align="center">FOR PROFESSIONALS VERIFICATION</h1><br>
	<h3 align="center">Login To Verify User</h3><br>

        <!--Header--><br>
        <div class="form-header  purple darken-4" >
            <h3><i class="fa fa-lock"></i> ADMIN</h3>
        </div>

        <!--Body-->
        <form name="login" >
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" placeholder="Username" name="id" class="form-control">
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" placeholder="password" name="pass" class="form-control">
        </div>

        <div class="text-center" align="center">
        <input type="button" onClick="pasuser(this.form)" class="btn btn-deep-purple" value="Login">
        </div>
        </form>
    </div>

    
</div>
</div>


    <!-- Javascript For Static Login -->
    <script >
    <!--//
    /*This Script allows people to enter by using a form that asks for a
    UserID and Password*/
    function pasuser(form) {
    if (form.id.value=="admin") { 
    if (form.pass.value=="password") {              
    location="get-approve.php" 
    } else {
    alert("Invalid Password")
    }
    } else {  alert("Invalid UserID")
    }
    }
//-->
</script>


 


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