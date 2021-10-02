<?php

	include '../lib/form-manip.php';
	
	include '../lib/general-api.php';
	
	include '../DB/dbconfig.php';
	
	
	echo $invalid_input = 0;
	if( ($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['user_login'])) )
	{
		// To count, how many invalid input values 
		// have been inserted `on this page.
		echo $invalid_input = 0; 
		// exit;
		
		if(isset($_POST['u_usn']) )
		{
		  $user_given_id = check_form_input( filter_var ( $_POST['u_usn'], FILTER_SANITIZE_STRING) );
		}
		else
		{
			$invalid_input++; //  Invalid input found!
		}
		if(isset($_POST['u_pass']) )
		{
			$user_given_pass = check_form_input( filter_var ( $_POST['u_pass'], FILTER_SANITIZE_STRING) );
		}
		else
		{
			$invalid_input++; //  Invalid input found!
		}
		
		if ($invalid_input == 0) // No invalid (suspicious) data received!! - so proceed to processing
		{
			if ( is_numeric( $user_given_id) )  
			{
				$logon_using_cell_no = 1; 
			}
			else 
			{
				$logon_using_cell_no = 0;
			}
			if ( $logon_using_cell_no == 0)
			{
				echo $query1 = "SELECT * FROM `user` WHERE u_usn  = '$user_given_id' "; 
			} 
			$result1 = mysqli_query($con2, $query1); 
			$num_rows = mysqli_num_rows($result1);
			$result = mysqli_query($con2, $query1);
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
			{
				$this_user_id = $row['u_usn'];
				$password = $row['u_password']; 
				//$is_password_reset = $row['is_password_reset']; 
			} 
			if ($user_given_pass == $password) 
			{
				echo $is_verified = 1;
			} 
			else 
			{
				echo $is_verified = 0;
			}
			if ( ( $num_rows > 0 ) && ( $is_verified == 1 ) )
			{
			session_start();
			$current_id = session_id();
			if ($logon_using_cell_no == 0)
			{
				echo $query2 = "SELECT  * FROM `user` WHERE u_usn  = '$user_given_id' ";
				$result = mysqli_query($con2, $query2);
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
				{
					$user_id = $row['id'];
					
					$name = $row['u_name'];
					$usn = $row['u_usn'];
					$password = $row['u_password'];
					$user_role = $row['u_user_role'];
					
				}
				$_SESSION['id'] = $user_id;	
				$_SESSION['u_usn'] = $usn;
				//$_SESSION['password'] = $cell;
				$_SESSION['u_user_role'] = $user_role;
			}
			if($_SESSION['u_user_role'] == 'cse')
			{
				$this_u_id = $_SESSION['u_usn'];
				echo $sql = "SELECT * FROM `user` WHERE u_usn = '$this_u_id' "; 
				$result = mysqli_query($con3, $sql);
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
				{
					echo $id = $row['id'];
					$u_usn = $row['u_usn'];
					$user_role = $row['u_user_role'];
				}
				echo $_SESSION['u_usn'];

				if($user_role== 'cse'){

						$usn =  $_SESSION['u_usn']; 
						echo $sql = "SELECT * FROM  `user` WHERE  u_usn = '$usn'"; 
						$result = mysqli_query($con2, $sql);
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
						{
							//$name             = $row['u_name'];
							$usn              = $row['u_usn'];
						}
						//$_SESSION['u_name']    	=  $u_name;
						$_SESSION['u_usn']        =   $u_usn;
					}
					// exit;
					$url = '../home_cse.php'; ?>
					<script>
						function myFunction() {
							alert("logged in successfully");
						}
					</script>
				<?php
					redirect($url);
					exit;
				}
				if($_SESSION['u_user_role'] == 'ise')
				{
					$this_u_id = $_SESSION['u_usn'];
					echo $sql = "SELECT * FROM `user` WHERE u_usn = '$this_u_id' "; 
					$result = mysqli_query($con3, $sql);
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
					{
						echo $id = $row['id'];
						$u_usn = $row['u_usn'];
						$user_role = $row['u_user_role'];
					}
					echo $_SESSION['u_usn'];

					if($user_role== 'ise'){

						$usn =  $_SESSION['u_usn']; 
						echo $sql = "SELECT * FROM  `user` WHERE  u_usn = '$usn'"; 
						$result = mysqli_query($con2, $sql);
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
						{
							//$name             = $row['u_name'];
							$usn              = $row['u_usn'];
						}
						//$_SESSION['u_name']    	=  $u_name;
						$_SESSION['u_usn']        =   $u_usn;
					}
					// exit;
					$url = '../home_ise.php'; ?>
					<script>
						function myFunction() {
							alert("logged in successfully");
						}
					</script>
				<?php
					redirect($url);
					exit;
				}
			}
			else
			{
				// Incorrect logon
				session_destroy();
				echo "<script>alert('Incorrect password')</script>";
				redirect("../index.php?msg=incorrect password: Please try again");
				exit;
			} 
		}
		else
		{
			echo "<script>alert('Invalid user User')</script>";
			redirect("../index.php?msg=Invalid User: please try again!");
			exit;
		} 
	}
	else
	{
	//session_destroy();
	redirect("../index.php");
	exit;
	; // perhaps a hack - do the needful e.g. terminating the session later.
	}
?>
