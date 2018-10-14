<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$pay_id              = $_POST['pay_id'];
			$u_id                = $_POST['u_id'];
			$name                = $_POST['name'];
			$pay_type            = $_POST['pay_type'];
			$amount              = $_POST['amount'];
			
			$pay_by              = $_POST['pay_by'];
			$bank                = $_POST['bank'];

			if($pay_id !='')
			{
				//update
	
				$sql ="UPDATE `payment` SET `u_id`='$u_id',`name`='$name',`pay_type`='$pay_type',`amount`='$amount',`pay_by`='$pay_by' WHERE `pay_id`='$pay_id'"; 
				$query = $con->exec($sql);

				if($query<=1)
				{
					header('location:../index.php?page=payment_view');
				}
				else
				{
					header('location:../index.php?page=404');
				}
			}
			else
			{
				//insert

				$sql="INSERT INTO `payment` (`u_id`,`name`,`pay_type`,`amount`,`pay_by`,`bank`) VALUES('$u_id','$name','$pay_type','$amount','$pay_by','$bank')";
				$query = $con->exec($sql);

				if($query <=1)
				{
					header('location:../index.php?page=payment_view');
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

			$pay_id = $_GET['pay_id'];
			$sql = "DELETE FROM `payment` WHERE `pay_id` = '$pay_id'";
			$query =$con->exec($sql);
			if($query)
			{
				header("location:index.php?page=payment_view");
			}
			else
			{
				header('location:index.php?page=404');
			}
		}
	
?>