<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$fd_id         = $_POST['fd_id'];
			$name          = $_POST['name'];
			$email         = $_POST['email'];
			$subject       = $_POST['subject'];
			$message       = $_POST['message'];
			$status        = $_POST['status'];
			
			if($fd_id !='')
			{
				//update
				
				$sql ="UPDATE `feedback` SET `name`='$name',`email`='$email',`subject`='$subject',`message`='$message',`status`='$status' WHERE `fd_id`='$fd_id'"; 
				$query = $con->exec($sql);

				if($query<=1)
				{
					header('location:../index.php?page=feedback_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}
			else
			{
				//insert

				$sql="INSERT INTO `feedback`(`name`,`email`,`subject`,`message`,`status`) VALUES('$name','$email','$subject','$message','$status')";
				$query = $con->exec($sql);

				if($query <=1)
				{
					header('location:../index.php?page=feedback_view');
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
			$fd_id = $_GET['fd_id'];
			if($status !="")
			{
				if($status == 'Active')
				{
					//update inactive
					//echo "Active Part";
					$sql = "UPDATE `feedback` SET `status`='Inactive' WHERE `fd_id`='$fd_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:index.php?page=feedback_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=feedback_view&msg=!Error for status update');	
					}
				}
				else
				{
					//update active
					//echo "Inactive Part";
					$sql = "UPDATE `feedback` SET `status`='Active' WHERE `fd_id`='$fd_id'";
					$query = $con->exec($sql);
					if($query)
					{
						header('location:index.php?page=feedback_view&msg=Status Update Successfuly');	
					}
					else
					{
						header('location:index.php?page=feedback_view&msg=status not Update Successfuly');	
					}
				}
			}
			else
			{
				//delete

				$fd_id = $_GET['fd_id'];
				$sql = "DELETE FROM `feedback` WHERE `fd_id` = '$fd_id'";
				$query =$con->exec($sql);
				if($query)
				{
					header("location:index.php?page=feedback_view");
				}
				else
				{
					header('location:index.php?page=404');
				}
			}
		}	
?>