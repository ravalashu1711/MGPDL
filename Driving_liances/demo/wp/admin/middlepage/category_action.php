<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$cat_id    = $_POST['cat_id'];
			$cat_name   = $_POST['cat_name'];
			$status  = $_POST['status'];
			
			if($cat_id !='')
			{
				//update
				
				$sql ="UPDATE `category` SET `cat_name`='$cat_name', `status`='$status' WHERE `cat_id`='$cat_id'";
				$query = $con->exec($sql);
				
				if($query<=1)
				{
					header('location:../index.php?page=category_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}
			else
			{
				//insert
				
				$sql="INSERT INTO `category`(`cat_name`,`status`) VALUES('$cat_name','$status')";
				$query = $con->exec($sql);

				

				if($query <=1)
				{
					header('location:../index.php?page=category_view');
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
			$cat_id = $_GET['cat_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `category` SET `status`='Inactive' WHERE `cat_id`='$cat_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:index.php?page=category_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=category_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `category` SET `status`='Active' WHERE `cat_id`='$cat_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:index.php?page=category_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=category_view&msg=status not Update Successfuly');	
					}
				}
			}
		
			else
			{
				//delete

				$cat_id = $_GET['cat_id'];
				$sql = "DELETE FROM `category` WHERE `cat_id` = '$cat_id'";
				$query =$con->exec($sql);
				if($query)
				{
					header("location:index.php?page=category_view");
				}
				else
				{
					header('location:/index.php?page=404');
				}
			}
		}	
?>