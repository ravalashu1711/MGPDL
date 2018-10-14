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
			
			if($u_id !='')
			{
				//update
				
				$sql ="UPDATE `user_reg` SET `photo`='$photo',`aadhar_no`='$aadhar_no',`name`='$name',`uname`='$uname',`password`='$password',`con_password`='$con_password',`email`='$email',`address`='$address',`city`='$city',`pincode`='$pincode',`birth_date`='$birth_date',`age`='$age',`mobile`='$mobile',`gender`='$gender' WHERE `u_id`='$u_id'"; 
				$query = $con->exec($sql);


				if($query<=1)
				{
					header('location:../index.php?page=reg_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}
			else
			{
				//insert
				$sql="INSERT INTO `user_reg`(`aadhar_no`,`name`,`uname`,`password`,`con_password`,`email`,`address`,`pincode`,`city`,`birth_date`,`age`,`mobile`,`gender`,`photo`) VALUES('$aadhar_no','$name','$uname','$password','$con_password','$email','$address','$pincode','$city','$birth_date','$age','$mobile','$gender','$photo')";
				$query = $con->exec($sql);

				

				if($query <=1)
				{
					move_uploaded_file($tmp_name,'../photo/'.$photo);
					header('location:../index.php?page=reg_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}

		}
		
		else
		{
			//delete
			$status = $_GET['status'];
			$u_id = $_GET['u_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `user_reg` SET `status`='Inactive' WHERE `u_id`='$u_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:index.php?page=reg_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=reg_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `user_reg` SET `status`='Active' WHERE `u_id`='$u_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:index.php?page=reg_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=reg_view&msg=status not Update Successfuly');	
					}
				}
			}
		
			else
			{
				//delete

				$u_id = $_GET['u_id'];
				$sql = "DELETE FROM `user_reg` WHERE `u_id` = '$u_id'";
				$query =$con->exec($sql);
				if($query)
				{
					header("location:index.php?page=reg_view");
				}
				else
				{
					header('location:index.php?page=404');
				}
			}
		}
?>