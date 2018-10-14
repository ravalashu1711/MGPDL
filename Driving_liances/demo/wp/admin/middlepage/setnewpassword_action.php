<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
			
			$a_id  = $_POST['a_id'];
			$password  = $_POST['password'];
			$con_password  = $_POST['con_password'];
			
			// echo "<pre>";
			// print_r($_POST);
			// exit;

			
				//update
				
				 $sql = "UPDATE `admin_login` SET `password`='$password',`con_password`='$con_password' WHERE `a_id`='$a_id' AND `status`='Active'";
				 $query = $con->exec($sql);
				 if($query)
				 {
				 	//echo "success....";
				 	header('location:../index.php');
				 }
				 else
				{
				 	header('location:setnewpassword.php');
				}
				
				
			
		}
	
?>