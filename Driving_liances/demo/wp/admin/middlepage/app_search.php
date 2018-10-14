
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=appointment_report">Appointment_Report</a>
</li>
</ul>

</div> <!-- /.page-title -->



<div class="row">

<div class="span12">

<div class="widget widget-table">


<div class="widget-content"></div></div></div></div></div></div>

<?php	
	include_once('../include/config.php');

	if(isset($_POST['submit']))
	{
		$from_date = $_POST['from_date'];
		$to_date   = $_POST['to_date'];

		$sql = "SELECT * FROM `appointment` WHERE created_date >= '$from_date' AND created_date <= '$to_date'";

		$result = $con->query($sql);
	}
		echo "
				<center>
				<table>
				<tr>

				<th>Appointment No</th>
				<th>User_ID</th>
				<th>Name :</th>
				<th>Appointment Date :</th>
				<th>Appointment Type :</th>
				<th>Created_Date</th>
				<th>Updated_Date</th>

				</tr>";

				while($data = $result->fetch(PDO::FETCH_ASSOC))
				{

				// echo "<pre>";
				// print_r($data);

				echo"
				<tr>
				<td>".$data['ap_id']."</td>
				<td>".$data['u_id']."</td>
				<td>".$data['name']."</td>
				<td>".$data['ap_date']."</td>
				<td>".$data['ap_type']."</td>
				<td>".$data['created_date']."</td>
				<td>".$data['updated_date']."</td>

				</tr>";
				}
				echo "</table></center>";
?>

