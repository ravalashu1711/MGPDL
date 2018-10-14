<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$nl_id    = $_POST['nl_id'];
		
		$sql = "SELECT * FROM `new_license` WHERE `nl_id`='$nl_id' AND `status`='Active'";
		$query = $con->query($sql);
		$row = $query->fetch(PDO::FETCH_ASSOC);
		
		$sql_new_license="SELECT * FROM `new_license` WHERE `nl_id`='$nl_id'";
		$query_new_license = $con->query($sql_new_license);
		$data_new_license = $query_new_license->fetch($query_new_license);
		$rl_id = $data_new_license['nl_id'];
		
		if($row<=0)
		{
			$msg="Enter Valid License No ";
			header('location:index.php?page=renew_license_login&msg='.$msg);
		}

		else
		{
			
			header('location:../wp/index.php?page=renew_license&msg=success&rl_id='.$rl_id);
			
		}
	}

?>