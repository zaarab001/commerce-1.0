 <?php
session_start();
include('includes/dbconnect.php');
include ('includes/authentication.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include ('includes/head.php');?>
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include('includes/navbar.php');?>
  
    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <?php $refid = $_SESSION['ref_id']; $fullname = $_SESSION['full_name'];?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">My Dashboard</a></li>
        <li class="breadcrumb-item active"><?php echo $fullname;?></li>
        <li class="breadcrumb-item active"> Online</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bank"></i>
              </div>
              <div class="mr-5">Account!</div>
              <p>My Bank Details</p>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="bank_details.php">
              <span class="float-left">More Info</span>
               <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-usd"></i>
              </div>
              <div class="mr-5">Total Balance!</div>
              <p>#25,000</p>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="withdrawal.php">
              <span class="float-left">More Info</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5">Total Client Invited!</div>
              <p>25</p>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">More Info</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-secondary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5">My Referal ID!</div>
              <p><?php echo $refid;?></p>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">More Info</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calendar"></i>
              </div>
              <div class="mr-5">Calendar!</div>
              <p><?php putenv("TZ=Africa/Lagos"); echo date("d-M-Y",time()). '<br>'.date("l");?></p>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="">
              <span class="float-left">View Calender</span>
               <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-dark bg-light o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-briefcase"></i>
              </div>
              <div class="mr-5">Jobs!</div>
              <p>Get New Jobs</p>
            </div>
            <a class="card-footer text-dark clearfix small z-1" href="">
              <span class="float-left">More Info</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">37 New Messages!</div>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Veiw to Read</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning disabled o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>              
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">More Info</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <br><br>
      
     <!-- /Card Columns-->
        </div>
        <div class="col-lg-4"></div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php include ('includes/footer.php');?>
    <!-- JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
