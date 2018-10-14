<?php
error_reporting(0);
include "../include/config.php";
//print_r($_POST);
$answer = $_POST;
$ans_implod = implode("",$answer);
//echo $ans_implod;
$right = 0;
$wrong = 0;
$no_answer = 0;


$sql = "SELECT t_id,answer FROM test";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{
	if($data['answer']==$_POST[$data['t_id']])
	{
		$right++;
	}
	else if($_POST[$data['t_id']] == "No_Attemp")
	{
		$no_answer++;
	}
	else
	{
		$wrong++;
	}
}
echo "<center>
		<h1>Final Result</h1>
		<table border='1' height='20%' width='40%'>
			<tr>
				<th style='text-align:left;'><h3>Total No of Question:</h3></th>
				<td><h3>".count($_POST)."</h3></td>
			</tr>
			<tr>
				<th style='color:green;text-align:left;'>Wright Attempted Answer:</th>
				<td>".$right."</td>
			</tr>
			<tr>
				<th style='color:#FFCC00;text-align:left;'>Not Attempted Answer:</th>
				<td>".$no_answer."</td>
			</tr>
			<tr>
				<th style='color:#cc0000;text-align:left;'>Wrong Attempted Answer:</th>
				<td>".$wrong."</td>
			</tr>
		</table>
	 <center>";
	 
// echo count($_POST);
// echo count($_POST['q_id'])
// echo "Right:".$right."<br>";
// echo "".$no_answer."<br>";
// echo "Wrong:".$wrong."<br>";
?>
