<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$rl_id    = $_POST['rl_id'];
		$birth_date = $_POST['birth_date'];
		
		$sql = "SELECT * FROM `renew_license` WHERE `rl_id`='$rl_id' AND `birth_date`='$birth_date' AND `status`='Active'";
		$query = $con->query($sql);
		$row = $query->fetch(PDO::FETCH_ASSOC);
		
		$sql_new_license="SELECT * FROM `renew_license` WHERE `rl_id`='$rl_id'";
		$query_new_license = $con->query($sql_new_license);
		$data_new_license = $query_new_license->fetch(PDO::FETCH_ASSOC);
		$name = $data_new_license['name'];
		$lastrenew_id = $data_new_license['rl_id'];

		if($row<=0)
		{
			$msg="Enter Valid Registration No Or Birth_Date";
			header('location:index.php?page=apprenew_login&msg='.$msg);
		}

		else
		{
			$pay_type= 'Renew License';	
			header('location:http://mgpdl.local/index.php?page=payment&msg=success&pay_type='.$pay_type.'&name='.$name.'&rl_id='.$lastrenew_id);
			
		}
	}

?>