<?php
include('../include/config.php');
if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$birth_date = $_POST['birth_date'];

	// echo "<pre>";
	// print_r($_POST);
	// exit;



	$sql = $con->query("select * from `user_reg` where `uname`='$uname' AND `birth_date`='$birth_date'");
	$query=$sql->fetch(PDO::FETCH_ASSOC);

	if($query>0)
	{
	   $u_id = $data['u_id'];
	   header('location:index.php?page=setnewpassword&u_id='.$u_id);
	}
	else
	{
		$msg=" Plz Enter Valid Email Or Birthdate";
		header('location:../wp/index.php?page=forget_password&msg='.$msg);
	}
}
?>