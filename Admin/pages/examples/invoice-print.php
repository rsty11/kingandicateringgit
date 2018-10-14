<?php
include("../../../session.php");
include("../../../config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>King and I | Invoice</title>
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
    <link rel="stylesheet" href="../../dist/css/print.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

    
<body><!--onload="window.print();" -->
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <div class="kinghead">
    <img src="../../dist/img/kingwhite.png"/ alt="" >
    <h3>King & I Events and Catering</h3>
    <p>Regidor corner Aguilar St.<br>
        Lucban, Quezon   </p>         
</div>
      </div>
      <!-- /.col -->
    </div>
 
        <?php $print=$_GET['print'];
            $result = mysqli_query($mysqli,"SELECT * FROM reservations where res_ID ='$print'"); ?> 
        <?php if($row = mysqli_fetch_array($result)){?>
      <div class="box box-primary" style="font-size: 20px;"><br>
   
        <strong>Contract Form</strong>
        <p class="pull-right" style="font-size: 16px;">Date: <strong><?php echo "" . date("F d, Y") . "<br>";?></strong></p><br><br>
          <p style="font-size: 16px;">Order ID: <b><?Php echo $row['res_ID']; ?></b></p>  
      </div>


      
<div class="row box-default">
    <div class="column full">
        <div class="input-group">
        <span class="input-group-addon"> <b>Reservation Date</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['resdate']; ?>" readonly>
        </div>
    </div>
    <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Arrangement Made by</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['arrange']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Reserved by</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['name']; ?>" readonly>
        </div>
    </div>
        <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Address</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['address']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Phone</b></span>
        <input type="tel" class="form-control" value="<?Php echo $row['phone']; ?>" readonly>
        </div>
    </div>

    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Email</b></span>
        <input type="email" class="form-control" value="<?Php echo $row['email']; ?>" readonly>
        </div>
    </div>
    <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Package</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['package']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Party Size</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['pax']; ?>" readonly>
        </div>
    </div>
    <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Menu</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['menu']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Event Date</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['date']; ?>" readonly>
        </div>
    </div>
    <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Event Location</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['location']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Event Day</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['day']; ?>" readonly>
        </div>
    </div>
    <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Function Name</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['function']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Time</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['time']; ?>" readonly>
        </div>
    </div>
    <div class="column left">
        <div class="input-group">
        <span class="input-group-addon"> <b>Motif</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['motif']; ?>" readonly>
        </div>
    </div>
    <div class="column right">
        <div class="input-group">
        <span class="input-group-addon"> <b>Theme</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['theme']; ?>" readonly>
        </div>
    </div>
    <div class="column full">
        <div class="input-group">
        <span class="input-group-addon"> <b>Setup</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['setup']; ?>" readonly>
        </div>
    </div>
    
    <div class="column left">
        <div class="form-group">
        <span class="input-group-addon pull-left"> <b>Description</b></span>
        <textarea class="form-control" rows="10" value="<?Php echo $row['desc']; ?>" placeholder="Enter ..."></textarea>
        </div>
    </div>
    <div class="column full">
        <div class="input-group">
        <span class="input-group-addon"> <b>reserve</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['reserve']; ?>" readonly>
        </div>
    </div>
    <div class="column full">
        <div class="input-group">
        <span class="input-group-addon"> <b>down</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['down']; ?>" readonly>
        </div>
    </div>
    <div class="column full">
        <div class="input-group">
        <span class="input-group-addon"> <b>bal</b></span>
        <input type="text" class="form-control" value="<?Php echo $row['bal']; ?>" readonly>
        </div>
    </div>
    
    
    
    
    
    
    

</div>
      
      
      
      
      

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-12">
        <p class="lead">Mode of Payment:</p>
        <div class="text-muted well well-sm no-shadow" style="margin-top: 0px;">
            
           <ul> <strong>MODE OF PAYMENT:</strong><br>
            <li>PHP 5,000 Reservation Fee (non-refundable)</li>
            <li>50%   Downpayment Fee (a month before the ocassion)</li>
            <li>25%   a week before the ocassion</li>
            <li>25%   on the day of the occasion</li>
            </ul><br><br>
            <p style="text-align: justify;">This contract form is to serve as Client’s written authorization for King & I Events and Catering to perform services with the client for the above described service.  Client’s signature also indicates understanding of the prices and terms for the said services.  Alterations or revisions of the above specifications involving extra cost will be executed only upon written orders.

I agreed to the terms and condition stated here in and failure on my part to comply with all the requirements shall render me liable for damages.
</p>
        </div>
      </div>
    </div>
    <!-- /.row --><?php }?>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
