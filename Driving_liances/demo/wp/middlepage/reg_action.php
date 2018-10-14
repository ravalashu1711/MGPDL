<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$u_id             = $_POST['u_id'];
			$aadhar_no        = $_POST['aadhar_no'];
			$name             = $_POST['name'];
			$uname  		  = $_POST['uname'];
			$password 		  = $_POST['password'];
			$con_password     = $_POST['con_password'];
			$email            = $_POST['email'];
			
			$address		  = $_POST['address'];
			$pincode		  = $_POST['pincode'];
			$birth_date		  = $_POST['birth_date'];
			$city   		  = $_POST['city'];
			
			$age    		  = $_POST['age'];
			
			$mobile    		  = $_POST['mobile'];
			
			$gender  		  = $_POST['gender'];

			$photo            = $_FILES['photo']['name'];
			$file_type        = $_FILES['photo']['type'];
			$file_size        = $_FILES['photo']['size'];
			$tmp_name         = $_FILES['photo']['tmp_name'];

			$status  		  = $_POST['status'];
			
			
			//insert
			$sql="INSERT INTO `user_reg`(`aadhar_no`,`name`,`uname`,`password`,`con_password`,`email`,`address`,`pincode`,`city`,`birth_date`,`age`,`mobile`,`gender`,`photo`) VALUES('$aadhar_no','$name','$uname','$password','$con_password','$email','$address','$pincode','$city','$birth_date','$age','$mobile','$gender','$photo')";
			$query = $con->exec($sql);
			if($query <=1)
			{
				move_uploaded_file($tmp_name,"../photo/".$photo);
				header('location:../index.php?page=login&msg=Successfully Registered');
			}
			else
			{
				header('location:../index.php?page=404');
			}
			
		}
?>