<?php	
	include_once('../include/config.php');

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM `admin_login` WHERE `email`='$username' AND `password`='$password' AND `status`='Active'" ;
	$query = $con->query($sql);
	$row = $query->fetch(PDO::FETCH_ASSOC);
	
	if($row<=0)
	{
		echo "Invalid Username and Password";
		header('location:login.php?msg=error');
	}
	else
	{
		$_SESSION['adminId'] = $row['a_id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['photo'] = $row['photo'];		
		
		header('location:../index.php?page=dashbord');
		
	}
}

?>