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
        <li class="breadcrumb-item active">Settings</li>
      </ol>
      <!-- Settings Table-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user"></i> Memunat Manzuma</div>
        <div class="card-body">
          				<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
                            	<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h5 class="btn btn-primary">
									            <a class="collapsed" data-toggle="collapse" style="color:#FFF;" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Change Phone Number and Password
									            </a>
									        </h5>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
<?php
if(isset($_POST['update_p'])){
//input validation
	function sanitize($dbC, $str){
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($dbC,$str);
	}
		   $phone_number = sanitize($dbC, $_POST['phone_number']);
		   $password = sanitize($dbC, md5($_POST['password']));
		   

		   $update_pp = mysqli_query($dbC, "UPDATE users_2hmobile SET phone_number = '$phone_number', password = '$password' WHERE user_id = 'user_id'");
		   if ($update_pp)
		   {
			   echo '<span class="d-lg-block bg-success">Changed</span>';
			}
			else
			{
				echo '<span class="d-lg-block bg-danger">Not Changed</span>';
			}
		   
		}
		   
		   ?>
                                            <form action="" method="post">  
                                                 <div class="form-group">
                                                <div class="form-row">
                                                <div class="col-md-4">
                                                   <i class="fa fa-fw fa-phone"></i> New Phone Number: <input class="form-control" id="phone_number" name="phone_number" type="text" required>
                                                  </div>
                                                  <div class="col-md-4">
                                                   <i class="fa fa-fw fa-lock"></i> New Password: <input class="form-control" id="password" name="password" type="password" required>
                                                  </div>
                                                  <div class="col-md-4">
                                                   <i class="fa fa-fw fa-lock"></i> New Confirm password: <input class="form-control" id="c_password" name="c_password" type="password" required>
                                                  </div>
                                                 </div>
                                              </div>
                                               <button type="submit" name="update_p" class="btn btn-primary">Change</button>
                                            </form>
									        </div>
									    </div>
									</div><br>
                                    				
								</div>
							</div>
        				</div>
        <div class="card-footer small text-muted">Changed yesterday at 11:59 PM</div>
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
