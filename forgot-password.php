<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head.php');?>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your Phone Number and we will send you a new password.</p>
        </div>
        <form>
          <div class="form-group">
            <label for="phone_number"><i class="fa fa-fw fa-phone"></i> Phone Number</label>
            <input class="form-control" id="phone_number" name="phone_number" type="text" placeholder="">
          </div>
          <button type="submit" name="r_password" class="btn btn-primary btn-block">Reset Password</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="signup.php">Register an Account</a>
          <a class="d-block small" href="login.php">Login Page</a>
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
