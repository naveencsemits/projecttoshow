<!DOCTYPE html>
<html>
<head>
	<title>
		Welcome To Admin Panel
	</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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
    <h1 align="center">ADMIN PANEL TO VERIFY USER</h1><br>
	<h3 align="center">ENTER TENANT UNIQUE ID FOR USER</h3><br>

        <!--Header--><br>

        <!--Body-->
        <form action="verify-data.php" method="POST">
        <div class="md-form">
            <input type="text" id="unique_ID" placeholder="Enter Unique ID" name="unique_ID" class="form-control">

        </div>

        <div class="text-center" align="center">
            <input type="submit" name="insert" class="btn btn-deep-purple" > 
        </div>

        </form>
    
    </div>
    </div>

    
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