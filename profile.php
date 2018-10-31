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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Profile</li>
      </ol>
      <!-- View Profile -->
            <?php $refid = $_SESSION['ref_id']; 
	  		$fullname = $_SESSION['full_name'];
			$phone = $_SESSION['phone_number'];
			$bank_nam = $_SESSION['bank_name'];
			$acct_no = $_SESSION['account_number'];
			$bank_acct_nam = $_SESSION['bank_account_name'];?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user"></i> <?php echo $fullname;?></div>
        <div class="card-body">
          
          
          
          
        </div>
       </div>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
