<?php

		include "../include/config.php";
		error_reporting(0);
		
		if(isset($_POST['submit']))
		{
		
			$nl_id             = $_POST['nl_id'];
				
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
			
			if($nl_id !='')
			{
				//update
				
				$sql ="UPDATE `new_license` SET `name`='$name',`email`='$email',`pincode`='$pincode',`address`='$address',`city`='$city',`state`='$state',`country`='$country',`mobile`='$mobile',`birth_date`='$birth_date',`place_of_birth`='$place_of_birth',`age`='$age',`b_group`='$b_group',`education`='$education',`lic_cat`='$lic_cat' WHERE `nl_id`='$nl_id'"; 
				$query = $con->exec($sql);
				move_uploaded_file($_FILES['document']['tmp_name'],"../img/".$_FILES['document']['name']);
			
				if($query<=1)
				{
					header('location:http://mgpdl.local/admin/index.php?page=new_license_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
			else
			{
				//insert
				
				$sql = "insert into new_license (name,email,address,pincode,city,state,country,mobile,birth_date,place_of_birth,age,b_group,education,document,lic_cat,status)
				values('$name','$email','$address','$pincode','$city','$state','$country','$mobile','$birth_date','$place_of_birth','$age','$b_group','$education','$document','$lic_cat','Active')";
				$query = $con->exec($sql);
				move_uploaded_file($_FILES['document']['tmp_name'],"../img/".$_FILES['document']['name']);
				// echo $query;
				if($query == 1)
				{
					header('location:http://mgpdl.local/admin/index.php?page=new_license_view');
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
			$nl_id = $_GET['nl_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `new_license` SET `status`='Inactive' WHERE `nl_id`='$nl_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:htttp://mgpdl.local/admin/index.php?page=new_license_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:http://mgpdl.local/admin/index.php?page=new_license_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `new_license` SET `status`='Active' WHERE `nl_id`='$nl_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:http://mgpdl.local/admin/index.php?page=new_license_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:http://mgpdl.local/admin/index.php?page=new_license_view&msg=status not Update Successfuly');	
					}
				}
			}
		




			else
			{
				//delete

				$nl_id = $_GET['nl_id'];
				$sql = "DELETE FROM `new_license` WHERE `nl_id` = '$nl_id'";
				$query =$con->exec($sql);
				if($query)
				{
					header("location:http://mgpdl.local/admin/index.php?page=new_license_view");
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
	}
?>
