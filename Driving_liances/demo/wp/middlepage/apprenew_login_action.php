<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$pay_id    = $_POST['pay_id'];
		$u_id      = $_POST['u_id'];


		$sql = "SELECT * FROM `payment` WHERE `pay_id`='$pay_id' AND `u_id`='$u_id' AND `status`='Active' AND `pay_type`='Renew License'";
		$query = $con->query($sql);
		$row = $query->fetch(PDO::FETCH_ASSOC);
		
		$sql_new_license     = "SELECT * FROM `payment` WHERE `u_id`='$u_id'";
		$query_new_license   = $con->query($sql_new_license);
		$data_new_license    = $query_new_license->fetch(PDO::FETCH_ASSOC);
		$last_id             = $data_new_license['u_id'];
		$name                = $data_new_license['name'];
		$pay_type            = $data_new_license['pay_type'];

		if($row<=0)
		{
			$msg="Enter Valid Payment No Or User_Id";
			header('location:index.php?page=apprenew_login&msg='.$msg);
		}

		else
		{
			
			$pay_type = 'Renew License';
			header('location:../wp/index.php?page=appointment&msg=success&pay_type='.$pay_type.'&name='.$name.'&u_id='.$last_id);
			
		}
	}

?>