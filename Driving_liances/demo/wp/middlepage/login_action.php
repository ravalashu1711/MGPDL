<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$uname    = $_POST['uname'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `user_reg` WHERE `uname`='$uname' AND `password`='$password' AND `status`='Active'";
		$query = $con->query($sql);
		$row = $query->fetch(PDO::FETCH_ASSOC);
		// var_dump(count($row));
		if(count($row) <= 0)
		{
			$msg=" Plz Enter Valid UserName Or Password";
			echo "elo";
			header('location:index.php?page=login&msg='.$msg);
		}

		else
		{
			session_start();
			$_SESSION['userId'] = $row['u_id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['uname'] = $row['uname'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['city'] = $row['city'];
			$_SESSION['pincode'] = $row['pincode'];
			$_SESSION['birth_date'] = $row['birth_date'];

			$_SESSION['photo'] = $row['photo'];
			
			
			var_dump($_SESSION);
			header('location:index.php');
			
		}
	}

?>