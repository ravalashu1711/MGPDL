<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$a_id            = $_POST['a_id'];
			$name            = $_POST['name'];
			$email           = $_POST['email'];
			$password        = $_POST['password'];
			$con_password    = $_POST['con_password'];

			$photo         =   $_FILES['photo']['name'];
		
			$img_type      =   $_FILES['photo']['type'];
			$img_size      =   $_FILES['photo']['size'];
			$tmp_name      =   $_FILES['photo']['tmp_name'];
			$status          = $_POST['status'];
			
			
			if($a_id !='')
			{
				//update
				$old_img = $_POST['photo'];
				$sql ="UPDATE `admin_login` SET `photo`='$photo',`name`='$name',`email`='$email',`password`='$password',`con_password`='$con_password',`status`='$status' WHERE `a_id`='$a_id'"; 
				$query = $con->exec($sql);
				
				if($query)
				{
					move_uploaded_file($tmp_name,"../upload/".$photo);
					header('location:http://mgpdl.local/admin/index.php?page=admin_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
			else
			{
				//insert

				$sql="INSERT INTO `admin_login`(`name`,`email`,`password`,`con_password`,`status`,`photo`) VALUES('$name','$email','$password','$con_password','$status','$photo')";
				$query = $con->exec($sql);

				if($query)
				{
					move_uploaded_file($tmp_name,"../upload/".$photo);
					header('location:http://mgpdl.local/admin/index.php?page=admin_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}

		}
		
		else
		{
			//delete
			$status = $_GET['status'];
			$a_id = $_GET['a_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `admin_login` SET `status`='Inactive' WHERE `a_id`='$a_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:http://mgpdl.local/admin/index.php?page=admin_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:http://mgpdl.local/admin/index.php?page=admin_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `admin_login` SET `status`='Active' WHERE `a_id`='$a_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:http://mgpdl.local/admin/index.php?page=admin_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:http://mgpdl.local/admin/index.php?page=admin_view&msg=status not Update Successfuly');	
					}
				}
			}
			else
			{
				//delete

				$a_id = $_GET['a_id'];
				$sql = "DELETE FROM `admin_login` WHERE `a_id` = '$a_id'";
				$query =$con->exec($sql);
				if($query)
				{
					header("location:http://mgpdl.local/admin/index.php?page=admin_view");
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
		}
?>