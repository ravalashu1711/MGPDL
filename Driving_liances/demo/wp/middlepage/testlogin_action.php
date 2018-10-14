<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$ap_id        = $_POST['ap_id'];
		$ap_date   = $_POST['ap_date'];

		$sql = "SELECT * FROM `appointment` WHERE `ap_id`='$ap_id' AND `ap_date`='$ap_date' AND `status`='Active'";
		$query = $con->query($sql);
		$row = $query->fetch(PDO::FETCH_ASSOC);
		
		
		if($row<=0)
		{
			$msg="Enter Valid Appointment No Or Appointment Date";
			header('location:index.php?page=test_login&msg='.$msg);
		}

		else
		{
			$app_date = $_POST['ap_date'];
			header('location:../wp/index.php?page=test&msg=success&ap_date='.$app_date);
			
		}
	}

?>