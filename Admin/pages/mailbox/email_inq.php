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
<link rel="shortcut icon" href="mini.ico" type="image/x-icon">
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
      <?php $send=$_GET['send']; $result = mysqli_query($mysqli,"SELECT * FROM inquiries where inq_ID ='$send'"); ?> <?php if($row = mysqli_fetch_array($result)){?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Send Email 
        <small><b>to <?php echo $row['Full_Name'];?></b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
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
              <form class="form-group" action="" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" name="sendto" id="sendto" placeholder="To:" value="<?php echo $row['Email_Address'];?>">
              </div>
              <div class="form-group">
                <input class="form-control" name="subj" id="subj" placeholder="Subject:">
              </div>
              <div class="form-group">
                  
                    <textarea id="emailmsg" name="emailmsg" class="form-control" style="height: 300px">
                      
                        
                    <?php echo "" .date("F d, Y") . "<br><br>";?> <br>  
                      Dear <b><?php echo $row['Full_Name'];?></b>,
                      <br><br>
                        Thank you for your interest with King & I Events and Catering.
                        
                        Please wait for the reply from our marketing team.<br><br>
                        Should you not hear from us within the next 2 working days, feel free to contact us at any of the following contact numbers:<br>
                        <ul>
                            <ol>(042) 5404297</ol>
                            <ol>09255124167</ol>
                            <ol>09175847379</ol>
                            <ol>09088833461</ol>
                        </ul>
                      Thank you and God bless us all!<br><br><br>
                      <i>Serving you with royalty,</i><br><br>
                           
                       <?php $str = "$login_session"; $str = strtoupper($str);?>
                                       
                      <b><?php echo $str;?></b><br>
                    King & I Events and Catering<br><br><br>
                        
                        
                        For your reference, <br>
                        <ul>
                        <li><b>Inquiry ID: </b>ki18-00<?php echo $row['inq_ID'];?></li>
                        <li><b>Inquiry Date: </b><?php echo $row['inqdate'];?></li>
                        <li><b>Contact Number: </b><?php echo $row['Telephone_Number'];?></li>
                        <li><b>Message: </b><?php echo $row['Your_Message'];?></li>
                      </ul>
                          
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="file" id="file">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
                <button type="reset" onclick="window.close()" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                  </div></form><?php }mysqli_close($mysqli);?>
            <!-- /.box-footer -->
              
              
              
                  <?php

        if(isset($_POST["submit"]))
        {


            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($_FILES['file']['name']);


    require ('../../bower_components/PHPMailer/PHPMailerAutoload.php'); 

            $mail = new PHPMailer(); // create a new object

            //$mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only ,false = Disable 
            $mail->Host = "smtp.gmail.com";
            $mail->Port = '587';
            $mail->SMTPAuth = true; // enable 
            $mail->SMTPSecure = true;
            $mail->IsHTML(true);
            $mail->Username = "kingandicatering@gmail.com"; //from@domainname.com
            $mail->Password = "teamada2018";
            $mail->SetFrom("kingandicatering@gmail.com", "King & I");
            $mail->Subject = $_POST['subj'];
            $mail->Body    = $_POST['emailmsg'];

            $mail->AddAttachment($uploadfile);

            $mail->AltBody = 'Upload';
            $mail->AddAddress($_POST['sendto']);
             if(!$mail->Send())
                {
      echo '<script>alert("Oops! Something is wrong. Please try again!");</script>';  
    echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo '<script>alert("Your message is sent successfully!");
            self.close();
        </script>';
    }

        }



?>
              
              
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
