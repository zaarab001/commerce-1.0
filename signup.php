<?php
session_start();
ob_start();
include('includes/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include ('includes/head.php');?>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account with 2h Technology</div>
      <div class="card-body">
      <?php include ('includes/_reg.php');?>
        <form action="" method="post">
          <div class="form-group">
            <div class="form-row">
              <label for="full_name"><i class="fa fa-fw fa-user"></i> Full name</label>
                <input class="form-control" id="full_name" name="full_name" type="text" aria-describedby="nameHelp" required>
              </div>
          </div>
         <div class="form-group">
            <div class="form-row">
              <div class="col-md-5">
                <label for="phone_number"><i class="fa fa-fw fa-phone"></i> Phone Number</label>
                <input class="form-control" id="phone_number" name="phone_number" type="text" required>
              </div>
              <div class="col-md-7">
                <label for="email"><i class="fa fa-fw fa-envelope"></i> Email</label>
                <input class="form-control" id="email" name="email" type="email" required>
              </div>
             </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password"><i class="fa fa-fw fa-lock"></i> Password</label>
                <input class="form-control" id="password" name="password" type="password" required>
              </div>
              <div class="col-md-6">
                <label for="c_password"><i class="fa fa-fw fa-lock"></i> Confirm password</label>
                <input class="form-control" id="c_password" name="c_password" type="password" required>
              </div>
             </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="bank_name"><i class="fa fa-fw fa-bank"></i> Bank Name</label>
                <input class="form-control" id="bank_name" name="bank_name" type="text" required>
              </div>
              <div class="col-md-4">
                <label for="account_number"><i class="fa fa-fw fa-usd"></i> Account Number</label>
                <input class="form-control" id="account_number" name="account_number" type="text" required>
              </div>
              <div class="col-md-4">
                <label for="bank_account_name"><i class="fa fa-fw fa-user"></i> Account Name</label>
                <input class="form-control" id="bank_account_name" name="bank_account_name" type="text" required>
              </div>
             </div>
          </div>
          <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Log in</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!--JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
