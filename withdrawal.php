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
        <li class="breadcrumb-item active">Withdrawal</li>
      </ol>
      <!-- Withdrawal Tables-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user"></i> Memunat Manzuma</div>
        <div class="card-body">
                     <h6>
                     <span style="text-align:center" class="alert alert-danger">NOTE: You can only withdraw NGN1,000 above.</span><br><br>
                     </h6>
              <?php $refid = $_SESSION['ref_id']; 
	  		$fullname = $_SESSION['full_name'];
			$phone = $_SESSION['phone_number'];
			$bank_nam = $_SESSION['bank_name'];
			$acct_no = $_SESSION['account_number'];
			$bank_acct_nam = $_SESSION['bank_account_name'];?>
             <form action="" method="post">
            <div class="form-group">
            <div class="form-row">
              <div class="col-md-3">
                <i class="fa fa-fw fa-bank"></i> Bank Name <input class="form-control" readonly="<?php echo $bank_nam;?>" id="disabledInput" name="bank_name" value="<?php echo $bank_nam;?>">
              </div>
              <div class="col-md-3">
               <i class="fa fa-fw fa-usd"></i> Account Number<input class="form-control" readonly="<?php echo $acct_no;?>" id="disabledInput" value="<?php echo $acct_no;?>" name="account_number">
              </div>
              <div class="col-md-3">
                <i class="fa fa-fw fa-user"></i> Account Name<input class="form-control" readonly="<?php echo $bank_acct_nam;?>" id="bank_account_name" value="<?php echo $bank_acct_nam;?>" name="bank_account_name">
              </div>
              <div class="col-md-3">
                <i class="fa fa-fw fa-usd"></i> Amount<input class="form-control" id="amount" name="amount" type="text" required>
              </div>
             </div>
          </div>
          <button type="submit" name="withdraw" class="btn btn-primary">Withdraw</button>
            </form>
            <br><br>
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Last Withdrawal</th>
                  <th>Bank Name</th>
                  <th>Account Name</th>
                  <th>Account Number</th>
                </tr>
              </thead>
               <tbody>
                <tr>
                  <td>1:20pm - 01/08/2018</td>
                  <td>First Bank</td>
                  <td>Hauwa Manzuma</td>
                  <td>0154590013</td>
                </tr>
                </tbody>
            </table>
          </div>
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
