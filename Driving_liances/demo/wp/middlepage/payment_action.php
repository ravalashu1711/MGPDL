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


			//insert
			$sql="INSERT INTO `payment` (`u_id`,`name`,`pay_type`,`amount`,`pay_by`,`bank`) VALUES('$u_id','$name','$pay_type','$amount','$pay_by','$bank')";
			$query = $con->exec($sql);

	  		$sql_license="SELECT * FROM `payment` ORDER BY `pay_id` DESC";
			$query_license = $con->query($sql_license);
			$data_license = $query_license->fetch(PDO::FETCH_ASSOC);
			$last_id = $data_license['pay_id'];
			$payment_type = $data_license['pay_type'];
			
			if($query <=1)
			{
				
				header('location:../index.php?page=payment_view&msg=Successful&pay_id='.$last_id.'&payment_type='.$payment_type);

			}
			else
			{
				header('location:../index.php?page=404');
			}
			
		}
?>