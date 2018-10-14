
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=payment_report">Payment_Report</a>
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

		$sql = "SELECT * FROM `payment` WHERE created_date >= '$from_date' AND created_date <= '$to_date'";

		$result = $con->query($sql);
	}
		echo "
				<center>
				<table>
				<tr>

				<th>Payment No</th>
				<th>User_ID</th>
				<th>Name Of Candidate:</th>
				<th>Payment For :</th>
				<th>Amount :</th>
				<th>Payment Using :</th>
				<th>Card Belongs To Which Bank :</th>
				<th>Created_Date</th>
				<th>Updated_Date</th>

				</tr>";

				while($data = $result->fetch(PDO::FETCH_ASSOC))
				{

				// echo "<pre>";
				// print_r($data);

				echo"
				<tr>
				<td>".$data['pay_id']."</td>
				<td>".$data['u_id']."</td>
				<td>".$data['name']."</td>
				<td>".$data['pay_type']."</td>
				<td>".$data['amount']."</td>
				<td>".$data['pay_by']."</td>
				<td><center>".$data['bank']."</center></td>
				<td>".$data['created_date']."</td>
				<td>".$data['updated_date']."</td>

				</tr>";
				}
				echo "</table></center>";
?>

