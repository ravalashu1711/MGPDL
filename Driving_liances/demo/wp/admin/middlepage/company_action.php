<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$cmp_id          = $_POST['cmp_id'];
			$cmp_name        = $_POST['cmp_name'];
			$email           = $_POST['email'];
			$contact_no      = $_POST['contact_no'];
			$address         = $_POST['address'];
			
			$file_name      = $_FILES['logo']['name'];
			$file_type      = $_FILES['logo']['type'];
			$file_size      = $_FILES['logo']['size'];
			$tmp_name       = $_FILES['logo']['tmp_name'];
		
			$status          = $_POST['status'];
			
			
			if($cmp_id !='')
			{
				//update
			
				$sql ="UPDATE `company_info` SET `cmp_name`='$cmp_name',`email`='$email',`contact_no`='$contact_no',`address`='$address',`logo`='$file_name',`status`='$status' WHERE `cmp_id`='$cmp_id'"; 
				$query = $con->query($sql);


				if($query<=1)
				{
					header('location:../index.php?page=company_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}
			else
			{
				//insert

				$sql="INSERT INTO `company_info`(`cmp_name`,`email`,`contact_no`,`address`,`logo`,`status`) VALUES('$cmp_name','$email','$contact_no','$address','$file_name','$status')";
				$query = $con->query($sql);

				if($query <=1)
				{
					header('location:../index.php?page=company_view');
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
			$cmp_id = $_GET['cmp_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `company_info` SET `status`='Inactive' WHERE `cmp_id`='$cmp_id'";
					$query = $con->query($sql);
					if($query)
					{
						header('location:index.php?page=company_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=company_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `company_info` SET `status`='Active' WHERE `cmp_id`='$cmp_id'";
					$query = $con->query($sql);
					if($query)
					{
						header('location:index.php?page=company_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=company_view&msg=status not Update Successfuly');	
					}
				}
			}
			else
			{
				//delete

				$cmp_id = $_GET['cmp_id'];
				$sql = "DELETE FROM `company_info` WHERE `cmp_id` = '$cmp_id'";
				$query =$con->query($sql);
				if($query)
				{
					header("location:index.php?page=company_view");
				}
				else
				{
					header('location:index.php?page=404');
				}
			}
		}
?>