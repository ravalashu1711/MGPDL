<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');


if(isset($_POST['submit']))
{
	$t_id = $_POST['t_id'];
	$name = $_POST['name'];
	$d_name = $_POST['d_name'];
	$subject = $_POST['subject'];
	
	if($t_id != '')
	{
		//update
	}
	else
	{
		$sql = "INSERT INTO `teacher`(`name`,`d_name`,`subject`) VALUE('$name','$d_name','$subject')";
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