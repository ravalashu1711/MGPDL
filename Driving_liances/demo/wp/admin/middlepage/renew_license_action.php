<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$rl_id             = $_POST['rl_id'];
			$name              = $_POST['name'];
			$email             = $_POST['email'];
			$address           = $_POST['address'];
			$city              = $_POST['city'];
			$pincode           = $_POST['pincode'];
			$state             = $_POST['state'];
			$country           = $_POST['country'];
			$mobile            = $_POST['mobile'];
			$birth_date        = $_POST['birth_date'];
			$place_of_birth    = $_POST['place_of_birth'];
			$age               = $_POST['age'];
			$b_group           = $_POST['b_group'];
			$education         = $_POST['education'];
			$lic_cat           = $_POST['lic_cat'];
			
			$document          = $_FILES['document']['name'];
			$file_type         = $_FILES['document']['type'];
			$file_size         = $_FILES['document']['size'];
			$tmp_name          = $_FILES['document']['tmp_name'];
			
			if($rl_id !='')
			{
				//update
				
				$sql ="UPDATE `renew_license` SET `name`='$name',`email`='$email',`pincode`='$pincode',`address`='$address',`city`='$city',`state`='$state',`country`='$country',`mobile`='$mobile',`birth_date`='$birth_date',`place_of_birth`='$place_of_birth',`age`='$age',`b_group`='$b_group',`education`='$education',`document`='$document',`lic_cat`='$lic_cat' WHERE `rl_id`='$rl_id'"; 
				$query = $con->exec($sql);
				move_uploaded_file($_FILES['document']['tmp_name'],"../img/".$_FILES['document']['name']);

				if($query<=1)
				{
					header('location:http://mgpdl.local/admin//index.php?page=renew_license_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin//index.php?page=404');
				}
			}
			else
			{
				//insert
				
				$sql="INSERT INTO `renew_license` (`name`,`email`,`address`,`pincode`,`city`,`state`,`country`,`mobile`,`birth_date`,`place_of_birth`,`age`,`b_group`,`education`,`document`,`lic_cat`) VALUES('$name','$email','$address','$pincode','$city','$state','$country','$mobile','$birth_date','$place_of_birth','$age','$b_group','$education','$document','$lic_cat')";
				$query = $con->exec($sql);
				move_uploaded_file($_FILES['document']['tmp_name'],"../img/".$_FILES['document']['name']);

				if($query <=1)
				{
					header('location:http://mgpdl.local/admin//index.php?page=renew_license_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin//index.php?page=404');
				}
			}


		}

		else
		{
			//delete
			$status = $_GET['status'];
			$rl_id = $_GET['rl_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `renew_license` SET `status`='Inactive' WHERE `rl_id`='$rl_id'";
					$query = $con->exec($sql);
					move_uploaded_file($_FILES['document']['tmp_name'],"../img/".$_FILES['document']['name']);

					if($query)
					{
						header('location:http://mgpdl.local/admin/index.php?page=renew_license_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:http://mgpdl.local/admin/index.php?page=renew_license_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `renew_license` SET `status`='Active' WHERE `rl_id`='$rl_id'";
					$query = $con->exec($sql);
					move_uploaded_file($_FILES['document']['tmp_name'],"../img/".$_FILES['document']['name']);

					if($query)
					{
						header('location:http://mgpdl.local/admin/index.php?page=renew_license_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:http://mgpdl.local/admin/index.php?page=renew_license_view&msg=status not Update Successfuly');	
					}
				}
			}
		




			else
			{
				//delete

				$rl_id = $_GET['rl_id'];
				$sql = "DELETE FROM `renew_license` WHERE `rl_id` = '$rl_id'";
				$query =$con->exec($sql);
				if($query)
				{

					header("location:http://mgpdl.local/admin/index.php?page=renew_license_view");
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
	}
?>
