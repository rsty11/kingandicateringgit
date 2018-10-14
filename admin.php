<?php
include("config.php"); 
session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>King's Admin | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="Admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" href="mini.ico" type="image/x-icon">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>King's</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
    <form action="employeeValidate.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="user" class="form-control" placeholder="Full Name" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="userpass" class="form-control" placeholder="Password" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <button type="submit" id="login" name="login" value="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
            
            
        </div>
      </div>
    </form>
  </div>
</div>

<script src="Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>


<?php
    unset($_SESSION["error"]);
?>