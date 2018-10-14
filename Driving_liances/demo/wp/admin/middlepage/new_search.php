
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=new_report">New_Licese_Report</a>
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

		$sql = "SELECT * FROM `new_license` WHERE created_date >= '$from_date' AND created_date <= '$to_date'";

		$result = $con->query($sql);
	}
		echo "
				<center>
				<table>
				<tr>

				<th>Reg_No:</th>
				
				<th>Full Name:</th>
				<th>Email:</th>
				<th>Address:</th>
				<th>City:</th>
				<th>Pincode:</th>
				<th>State:</th>
				<th>Country:</th>
				<th>Mobile:</th>
				<th>Birth_Date:</th>
				<th>Place Of Birth:</th>
				<th>Age:</th>
				<th>Blood Group:</th>
				<th>Education:</th>
				<th>Created_Date:</th>
				<th>Updated_Date:</th>


				</tr>";

				while($data = $result->fetch(PDO::FETCH_ASSOC))
				{

				// echo "<pre>";
				// print_r($data);

				echo"
				<tr>
				<td>".$data['nl_id']."</td>
				
				<td>".$data['name']."</td>
				<td>".$data['email']."</td>
				<td>".$data['address']."</td>
				<td>".$data['city']."</td>
				<td>".$data['pincode']."</td>
				<td>".$data['state']."</td>
				<td>".$data['country']."</td>
				<td>".$data['mobile']."</td>
				<td>".$data['birth_date']."</td>
				<td>".$data['place_of_birth']."</td>
				<td>".$data['age']."</td>
				<td>".$data['b_group']."</td>
				<td>".$data['education']."</td>
				<td>".$data['created_date']."</td>
				<td>".$data['updated_date']."</td>

				</tr>";
				}
				echo "</table></center>";
?>

