<?php
		 if(isset($_POST['Log_in']))
		 {
		
//input validation
	function sanitize($dbC, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($dbC,$str);
	}

			$phone_number = sanitize($dbC,$_POST['phone_number']);
			$password = md5($_POST['password']);
			
			if(!(empty($phone_number)) && !(empty($password)))
			{			 
			$Login = mysqli_query($dbC, "SELECT * FROM users_2hmobile WHERE phone_number = '$phone_number' && password = '$password'");
			
			if (mysqli_num_rows($Login) == 1)
			
			{
				$row = mysqli_fetch_assoc($Login);
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['ref_id'] = $row['ref_id'];
				$_SESSION['full_name'] = $row['full_name'];
				$_SESSION['phone_number'] = $row['phone_number'];
				$_SESSION['bank_name'] = $row['bank_name'];
				$_SESSION['account_number'] = $row['account_number'];
				$_SESSION['bank_account_name'] = $row['bank_account_name'];
				
				ob_flush();
				
				header('location:index.php');
								
				//echo '<span class="d-lg-block bg-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="d-lg-block bg-danger">Log in detail incorrect</span>';
					}
			}
						
			}
?>