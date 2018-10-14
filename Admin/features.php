<?php
include("../session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>King's Admin | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-blue.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="../mini.ico" type="image/x-icon">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index.html" class="logo">
      <span class="logo-mini"><b>k</b>&<b>i</b></span>
      <span class="logo-lg"><b>King's</b> Admin</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo "$login_session";?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo "$login_session";?> - Web Developer
                  <small>Authorized Personnel</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="pages/examples/lockscreen.php" class="btn btn-default btn-flat">Lock Screen</a>
                </div>
                <div class="pull-right">
                  <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "$login_session";?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="dash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
          <a href="pages/mailbox/compose.php"><i class="fa fa-envelope"></i> <span>Email</span></a>
        </li>
        <li class="header">TABLES</li>
        <li>
          <a href="pages/tables/customerinquiries.php">
            <i class="fa fa-table"></i> <span>Customer Inquiries</span></a>
        </li>
        <li>
          <a href="pages/tables/customerreservations.php">
            <i class="fa fa-calendar"></i> <span>Customer Reservations</span></a>
        </li>
        <li class="header">ARCHIVE</li>
        <li>
          <a href="pages/tables/archive_inq.php">
            <i class="fa fa-archive"></i> <span>Archived Inquiries</span></a>
        </li>
        <li>
          <a href="pages/tables/archive_res.php">
            <i class="fa fa-calendar-check-o"></i> <span>Archived Reservations</span></a>
        </li>  
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Features
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dash.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Features</li>
      </ol>
    </section>

<section class="content">
    <div class="row">
        
        <div class="col-md-9">
            <div class="box direct-chat">
    		<h3 style="text-align: center; font-family: 'Montez', cursive;
    font-size: 40px; text-transform: none;">Hello there!</h3><br>
   
    <ul>
    <li><b>FEATURES AS OF JANUARY 2018:</b></li>
    <li>Validate log in credentials</li>
    <li>Real-time clock and 3-day weather forecast widgets</li>
    <li>Ability to compose email with file attachments (as long as the attachments are in the server) for clients in an intuitive email editor</li>
    <li>Automatically notify customer via email after submitting contact form</li>
    <li>Automatically notify admin via email that a customer has inquired</li>
    <li>Show all submitted inquiries and reservations on separate tables</li>
    <li>Print all inquiries and reservations in a letter-sized paper</li>
    <li>Reply to an inquiry via email with pre-written but editable email message</li>
    <li>Reply to a reservation via email with pre-written but editable email message</li>
    <li>Archive answered inquiries</li>
    <li>Archive cancelled reservations</li>
    <li>Show all archived inquiries and reservations on separate tables</li><br><br>
    </ul>


    	</div></div>
        
        
<span>
<div class="col-md-3 pull-right">
    <div class="box box-primary direct-chat direct-chat-primary">
        <iframe src="http://free.timeanddate.com/clock/i63vvqdh/n5100/fn14/fs17/fc3c8dbc/ftb/bls0/blt6/blc00fff2/brt0/brc3c8dbc/bts0/btt6/btc180000/bbs5/bbt6/bbc3c8dbc/pa5/tt0/tw1/th2/tb4" frameborder="0" width="250" height="57"></iframe>
            <a class="weatherwidget-io" href="https://forecast7.com/en/14d13121d56/lucban/" data-label_1="LUCBAN," data-label_2="Quezon" data-font="Roboto" data-icons="Climacons Animated" data-days="3" data-theme="weather_one" >LUCBAN, Quezon</a>
        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>

    </div>
</div>
       </span>
        


    </div>
</section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.3
    </div>
    <strong>Copyright &copy; 2018 <a href="#">King & I Events and Catering</a>.</strong> All rights reserved.
  </footer>
</div>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
</body>
</html>
