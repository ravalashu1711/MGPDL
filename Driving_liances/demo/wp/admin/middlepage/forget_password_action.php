<?php
include('../include/config.php');
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$name = $_POST['name'];

	// echo "<pre>";
	// print_r($_POST);
	// exit;



	$sql = $con->query("select * from `admin_login` where `email`='$email' AND `name`='$name'");
	$query=$sql->fetch(PDO::FETCH_ASSOC);

	if($query>0)
	{
	   $a_id = $data['a_id'];
	   header('location:setnewpassword.php?a_id='.$a_id);
	}
	else
	{
		header('location:../middlepage/forget_password.php');
	}
}
?>