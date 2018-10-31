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
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
<?php include ('includes/_login.php');?>
        <form action="" method="post">
          <div class="form-group">
            <label for="phone_number"><i class="fa fa-fw fa-phone"></i> Phone Number</label>
            <input class="form-control" id="phone_number" name="phone_number" type="text" required>
          </div>
          <div class="form-group">
            <label for="password"><i class="fa fa-fw fa-lock"></i> Password</label>
            <input class="form-control" id="password" name="password" type="password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" name="Log_in" class="btn btn-primary btn-block">Log in</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="signup.php">Register an Account</a>
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
