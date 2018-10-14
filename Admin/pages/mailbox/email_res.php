<?php
include("../../../session.php");
include("../../../config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>King's Admin | Compose Message</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="shortcut icon" href="../../../mini.ico" type="image/x-icon">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <header class="main-header">
    <a href="../../index.html" class="logo">
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
              <img src="../../dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo "$login_session";?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo "$login_session";?>
                  <small>Authorized Personnel</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../examples/lockscreen.php" class="btn btn-default btn-flat">Lock Screen</a>
                </div>
                <div class="pull-right">
                  <a href="../../signout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "$login_session";?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../../dash.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="active">
          <a href=""><i class="fa fa-envelope"></i> <span>Email</span></a>
        </li>
        <li class="header">TABLES</li>
        <li>
          <a href="../tables/customerinquiries.php">
            <i class="fa fa-table"></i> <span>Customer Inquiries</span></a>
        </li>
        <li>
          <a href="../tables/customerreservations.php">
            <i class="fa fa-calendar"></i> <span>Customer Reservations</span></a>
        </li>
        <li class="header">ARCHIVE</li>
        <li>
          <a href="../tables/archive_inq.php">
            <i class="fa fa-archive"></i> <span>Archived Inquiries</span></a>
        </li>
        <li>
          <a href="../tables/archive_res.php">
            <i class="fa fa-calendar-check-o"></i> <span>Archived Reservations</span></a>
        </li>  
      </ul>
    </section>
  </aside>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php $send=$_GET['send']; $result = mysqli_query($mysqli,"SELECT * FROM reservations where res_ID ='$send'"); ?> <?php if($row = mysqli_fetch_array($result)){?>
    <section class="content-header">
      <h1>
        Send Email 
        <small><b>to <?php echo $row['name'];?></b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../dash.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Compose Email</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        
        
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
              <form class="form-group" action="sendmail_res.php" method="GET">
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" name="sendto" id="sendto" placeholder="To:" value="<?php echo $row['email'];?>">
              </div>
              <div class="form-group">
                <input class="form-control" name="subj" id="subj" placeholder="Subject:">
              </div>
              <div class="form-group">
                  
                    <textarea id="emailmsg" name="emailmsg" class="form-control" style="height: 300px">
                      
                      <h4>Dear <?php echo $row['name'];?>,</h4>
                      
                      <ul>
                        <li><b>Reservation ID:</b> <?php echo $row['res_ID'];?></li>
                        <li><b>Reservation Date:</b> <?php echo $row['resdate'];?></li>
                        <li><b>Contact Number: </b><?php echo $row['phone'];?></li>
                        <li><b>Event Date: </b><?php echo $row['date'];?></li>
                        <li><b>Event Day: </b><?php echo $row['day'];?></li>
                        <li><b>Event Location: </b><?php echo $row['location'];?></li>
                        <li><b>Party Size: </b><?php echo $row['pax'];?></li>
                        <li><b>Package Price: </b><?php echo $row['total'];?></li>
                      </ul>
                      <p>Regards,</p>
                      <p><b><?php echo "$login_session";?></b></p>
                        <p>King & I CEO</p>
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" onclick="window.close()" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                  </div></form><?php }mysqli_close($mysqli);?>
            <!-- /.box-footer -->
                  </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.3
    </div>
    <strong>Copyright &copy; 2018 <a href="#">King & I Events and Catering</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#emailmsg").wysihtml5();
  });
</script>
</body>
</html>
