<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$ap_id              = $_POST['ap_id'];
			$u_id               = $_POST['u_id'];
			$name               = $_POST['name'];
			$ap_type            = $_POST['ap_type'];
			$ap_date            = $_POST['ap_date'];
			
			
			
			//insert
			$sql="INSERT INTO `appointment` (`u_id`,`name`,`ap_type`,`ap_date`) VALUES('$u_id','$name','$ap_type','$ap_date')";
			$query = $con->exec($sql);

	  		$sql_new_license="SELECT * FROM `appointment` ORDER BY `ap_id` DESC";
			$query_new_license = $con->query($sql_new_license);
			$data_new_license = $query_new_license->fetch(PDO::FETCH_ASSOC);
			$last_id = $data_new_license['ap_id'];
			$app_type = $data_new_license['ap_type'];
			if($query <=1)
			{
				
				header('location:../index.php?page=appointment_view&msg=Successful&ap_id='.$last_id.'&ap_type='.$app_type);

			}
			else
			{
				header('location:../index.php?page=404');
			}
			
		}
?>