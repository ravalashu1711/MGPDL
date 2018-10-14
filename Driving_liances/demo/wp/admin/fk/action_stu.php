<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');

if(isset($_POST['submit']))
{
	$s_id = $_POST['s_id'];
	$t_id = $_POST['t_id'];
	$name = $_POST['name'];
	$subject = $_POST['field'];
	
	if($s_id != '')
	{
		//update
	}
	else
	{
		$sql = "INSERT INTO `student`(`name`,`field`,`t_id`) VALUES('$name','$subject','$t_id')";
		$con->exec($sql);
		if($con)
		{
			echo "Success..";
		}
		else
		{
			echo "!Error";
		}
	}
}
?>