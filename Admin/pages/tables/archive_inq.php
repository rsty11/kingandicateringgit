<?php
include("../../../session.php");
include("../../../config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>King's Admin | Archive</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
  <!-- Left side column. contains the logo and sidebar -->
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
        <li>
          <a href="../mailbox/compose.php"><i class="fa fa-envelope"></i> <span>Email</span></a>
        </li>
        <li class="header">TABLES</li>
        <li>
          <a href="customerinquiries.php">
            <i class="fa fa-table"></i> <span>Customer Inquiries</span></a>
        </li>
        <li>
          <a href="customerreservations.php">
            <i class="fa fa-calendar"></i> <span>Customer Reservations</span></a>
        </li>
        <li class="header">ARCHIVE</li>
        <li class="active">
          <a href="archive_inq.php">
            <i class="fa fa-archive"></i> <span>Archived Inquiries</span></a>
        </li>
        <li>
          <a href="archive_res.php">
            <i class="fa fa-calendar-check-o"></i> <span>Archived Reservations</span></a>
        </li>  
      </ul>
    </section>
  </aside>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Archived Inquiries
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../dash.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Archived Inquiries</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header" style="aligh: right;">
                <a href="inquiryReport.php" class="btn btn-success btn-xs">
                    <span class="glyphicon glyphicon-print"></span> Print 
                </a>
                <button type="button" class="btn btn-primary btn-xs" onClick="window.location.reload()">
                    <i  class="fa fa-refresh"></i> Refresh
                </button>
                <a href="#" type="button" data-href="inqHardDel.php" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger">
                Delete All</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div style="overflow-x:auto;">
                <?php $result = mysqli_query($mysqli,"SELECT * FROM archived_inq"); ?>
              <table id="example1" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Inquiry Date</th>
                    <th>Full Name</th>			  
                    <th>Email Address</th>
                    <th>Contact Number</th>	
                    <th>Message</th>	
                    <th>Date Deleted</th>	
                    <th>Actions</th>
                    
                    
                </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?Php echo $row['inq_ID']; ?></td>
                    <td><?Php echo $row['inqdate']; ?></td>
                    <td><?php echo $row['Full_Name']; ?></td>
                    <td><?php echo $row['Email_Address']; ?></td>
                    <td><?php echo $row['Telephone_Number']; ?></td>
                    <td><?php echo $row['Your_Message']; ?></td>
                    <td><?php echo $row['deldate']; ?></td>
                    <td>
                        
                        
                       <div class="btn-group-vertical"> 
                        
                        <a href="#" type="button" data-href="customerInqDelete.php?delete=<?php echo $row['inq_ID']; ?>" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-warning">
                Restore</a>
                    <a href="../mailbox/mail_inq.php?send=<?php echo $row['res_ID']; ?>" type="button" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-send"></span> Email</a>
                  </div>
                    </td>
                    </tr>
                    
        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure?</h4>
              </div>
              <div class="modal-body">
                <p>Think twice before you click. Deleting all archived inquiries cannot be undone!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <a class="btn btn-outline btn-ok">Delete All</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                    
                    <?php }mysqli_close($mysqli);?>
                </tbody>
                  
                </table>
                </div></div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
    
<script>
$('#modal-danger').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});    
    
</script>    
    
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
