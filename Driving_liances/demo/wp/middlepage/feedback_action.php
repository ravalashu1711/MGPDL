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
			
			
			
			
			//insert

			$sql="INSERT INTO `feedback`(`name`,`email`,`subject`,`message`) VALUES('$name','$email','$subject','$message')";
			$query = $con->exec($sql);

			if($query <=1)
			{
				header('location:../index.php?page=feedback&msg=success');
			}
			else
			{
				header('location:../index.php?page=404');
			}
			

		}
		
?>