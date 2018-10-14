<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
			
			$u_id          = $_POST['u_id'];
			$password      = $_POST['password'];
			$con_password  = $_POST['con_password'];
			
			// echo "<pre>";
			// print_r($_POST);
			// exit;

			
				//update
				
				 $sql = "UPDATE `user_reg` SET `password`='$password',`con_password`='$con_password' WHERE `u_id`='$u_id' AND `status`='Active'";
				 $query = $con->exec($sql);
				 if($query)
				 {
				 	//echo "success....";
				 	header('location:../wp/index.php?page=login&msg=Successfull');
				 }
				 else
				{
				 	header('location:setnewpassword.php');
				}
				
				
			
		}
	
?>