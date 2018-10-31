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
        <li class="breadcrumb-item active">My Bank Details</li>
      </ol>
      <!-- Bank Details Tables -->
      <?php $refid = $_SESSION['ref_id'];
	  		$uid = $_SESSION['user_id']; 
	  		$fullname = $_SESSION['full_name'];
			$phone = $_SESSION['phone_number'];
			$bank_nam = $_SESSION['bank_name'];
			$acct_no = $_SESSION['account_number'];
			$bank_acct_nam = $_SESSION['bank_account_name'];?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user">&nbsp;</i><?php echo $fullname;?></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Bank Name</th>
                  <th>Account Name</th>
                  <th>Account Number</th>
                </tr>
              </thead>
               <tbody>
                <tr>
                  <td><?php echo $bank_nam;?></td>
                  <td><?php echo $bank_acct_nam;?></td>
                  <td><?php echo $acct_no;?></td>
                </tr>
                </tbody>
            </table>
          </div><br><br>
           <h6>Change Bank Details</h6><br>
           <?php 
if(isset($_POST['update'])){
//input validation
	function sanitize($dbC, $str){
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($dbC,$str);
	}
		   $bank_name = sanitize($dbC, $_POST['bank_name']);
		   $account_number = sanitize($dbC, $_POST['account_number']);
		   $bank_account_name = sanitize($dbC, $_POST['bank_account_name']);

		   $update_bank = mysqli_query($dbC, "UPDATE users_2hmobile SET bank_name = '$bank_name', account_number = '$account_number', bank_account_name = '$bank_account_name' WHERE user_id = '$uid'");
		   if ($update_bank)
		   {
			   echo '<span class="alert alert-success">Bank Details Changed</span>';
			}
			else
			{
				echo '<span class="alert alert-danger">Bank Details Not Changed</span>';
			}
		   
		}
		   
		   ?>
            <form action="" method="post">
            <div class="form-group">
            <br><div class="form-row">
              <div class="col-md-3">
                <i class="fa fa-fw fa-bank"></i> Bank Name <input class="form-control" id="bank_name" name="bank_name" type="text" required>
              </div>
              <div class="col-md-3">
               <i class="fa fa-fw fa-usd"></i> Account Number<input class="form-control" id="account_number" name="account_number" type="text" required>
              </div>
              <div class="col-md-3">
                <i class="fa fa-fw fa-user"></i> Account Name<input class="form-control" id="bank_account_name" name="bank_account_name" type="text" required>
              </div>
             </div>
          </div>
          <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
            <!-- <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dismissable alert.. just sayin'.
                  </div>-->
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
