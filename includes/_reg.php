<?php
if(isset($_POST['register']))
		{
			$full_name = $_POST['full_name'];
			$phone_number = $_POST['phone_number'];
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$c_password = md5($_POST['c_password']);
			$bank_name = $_POST['bank_name'];
			$account_number = $_POST['account_number'];
			$bank_account_name = $_POST['bank_account_name'];
			
			if((empty($full_name)) && (empty($phone_number)) && (empty($email)) && (empty($password)) && (empty($c_password)) && (empty($bank_name)) && (empty($account_number)) && (empty($bank_account_name)) )
			{
				
				echo '<span class="label label-danger">Please fill in all fields with asteric(*)</span>';
			}
			else{
					$check_phone = mysqli_query($dbC, "SELECT * FROM users_2hmobile WHERE phone_number = '$phone_number'");
					if(mysqli_num_rows($check_phone)==1)
					{//start of checking if Phone Number exist
						echo '<span class="btn btn-danger">Sorry Phone Number used by another User</span>';
					}//end of checking if Phone Number exist
					
					else{//strat of else if Phone Number exist
						
						if ($password != $c_password){
							echo '<span class="btn btn-danger">Password and Confirm Password Not thesame</span>';	
						}
						else{
							//GENERATE REFERAL ID
						$gid = mysqli_query($dbC, "SELECT MAX(user_id) AS mid FROM users_2hmobile")or die(mysqli_error());
						while($row = mysqli_fetch_array($gid)){
							$mid = $row['mid'];
							$mid += 1;
							}
						$ref_id = "2h".date('y');
						$ref_id .= sprintf("%04d", $mid); 
						$ref_id .= date('m'); 
				
						$user_reg = mysqli_query($dbC, "INSERT INTO users_2hmobile
											(
											ref_id,
											full_name,
											phone_number,
											email,
											password,
											bank_name,
											account_number,
											bank_account_name,
											date_reg
											)
											VALUES(
											'$ref_id',
											'$full_name',
											'$phone_number',
											'$email',
											'$password',
											'$bank_name',
											'$account_number',
											'$bank_account_name',
											Now()
											)");//Users info
											if($user_reg)
											{
												echo '<span class="d-lg-block bg-success">Registeration Successfull</span>';
												header('location:login.php');
											}
											else
											{
												echo '<span d-lg-block bg-danger">Registeration not Successfull</span>';
											}
											
								}// end of else checking password
							}// end of else if Phone Number exist
							
							
							
							}// end of else if not empty fields
											
				
				
		}
		
?>