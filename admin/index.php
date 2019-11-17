<?php
// Start the session
  session_start();
  if(empty($_SESSION['username']))
  {
    header("location: ../users/login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>CDR - UCSMTLA</title>
  <link rel = "icon" type = "images/jpg" href = "images/ucsmtla-logo.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom-css/main.css">
  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.js"></script>

  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  <!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CDR</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="requests.php"><span class="fa fa-list text-danger"></span> Requests</a></li>
          <li ><a href="confirm.php"><span class="fa fa-check text-warning"></span> Comfirmed</a></li>
          <li ><a href="register.php"><span class="fa fa-flag text-success"></span> Registered</a></li>
          <li ><a href="admins.php"><span class="fa fa-group text-primary"></span> Admins</a></li>
        </ul>
        <div class="nav navbar-right">
          <span class="text-primary"><?php echo $_SESSION['username'];?></span>
          <button type="button" class="btn navbar-btn dropdown-toggle button-login" data-toggle="dropdown">
            <a href="../users/logout.php">
              <span class="fa fa-sign-out"></span>
              Logout
            </a>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>