<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$ap_id    = $_POST['ap_id'];
			$u_id     = $_POST['u_id'];
			$name     = $_POST['name'];
			$ap_type  = $_POST['ap_type'];
			$ap_date  = $_POST['ap_date'];
			
			if($ap_id !='')
			{
				//update
				
				$sql ="UPDATE `appointment` SET `u_id`='$u_id',`name`='$name',`ap_type`='$ap_type',`ap_date`='$ap_date' WHERE `ap_id`='$ap_id'"; 
				$query = $con->exec($sql);

				if($query <=1)
				{
					header('location:../index.php?page=appointment_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}
			else
			{
				//insert

				$sql="INSERT INTO `appointment`(`u_id`,`ap_type`,`name`,`ap_date`) VALUES('$u_id','$ap_type','$name','$ap_date')";
				$query = $con->exec($sql);

				if($query <=1)
				{
					header('location:../index.php?page=appointment_view');
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

			$ap_id = $_GET['ap_id'];
			$sql = "DELETE FROM `appointment` WHERE `ap_id` = '$ap_id'";
			$query =$con->exec($sql);
			if($query)
			{
				header("location:index.php?page=appointment_view");
			}
			else
			{
				header('location:index.php?page=404');
			}
		}	
?>