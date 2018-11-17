<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$nl_id    = $_POST['nl_id'];
		$birth_date = $_POST['birth_date'];
		$sql = "SELECT * FROM `new_license` WHERE `nl_id`='$nl_id' AND `birth_date`='$birth_date' AND `status`='Active'";
		$query = $con->query($sql);
		$row = $query->fetch(PDO::FETCH_ASSOC);
		
		$sql_new_license="SELECT * FROM `new_license` WHERE `nl_id`='$nl_id'";
		$query_new_license = $con->query($sql_new_license);
		$data_new_license = $query_new_license->fetch(PDO::FETCH_ASSOC);
		$lastnew_id = $data_new_license['nl_id'];
		$name = $data_new_license['name'];

		if($row<=0)
		{
			$msg="Enter Valid Registration No Or Birth_Date";
			header('location:index.php?page=paynew_login&msg='.$msg);
		}

		else
		{
			
			$pay_type = 'New License';
			header('location:http://mgpdl.local/index.php?page=payment&msg=success&pay_type='.$pay_type.'&name='.$name.'&nl_id='.$lastnew_id);
			
		}
	}

?>