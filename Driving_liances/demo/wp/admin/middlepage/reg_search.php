
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=reg_report">Registration_Report</a>
</li>
</ul>

</div> <!-- /.page-title -->



<div class="row">

<div class="span12">

<div class="widget widget-table">


<div class="widget-content"></div></div></div></div></div></div>

<?php	
	include_once('../include/config.php');
	// var_dump($_POST);
	if(isset($_POST['submit']))
	{
		$from_date = $_POST['from_date'];
		$to_date   = $_POST['to_date'];

		$sql = "SELECT * FROM `user_reg` WHERE created_date >= '$from_date'";
		$result = $con->query($sql);
		
	}
		echo "
				<center>
				<table>
				<tr>

				<th>U_Id</th>
				
				<th>Aadharcard_No</th>
				<th>Name</th>
				<th>UserName</th>
				<th>Password</th>
				<th>Confirm Password</th>
				<th>Email</th>
				<th>Address</th>
				<th>Pincode</th>
				<th>City</th>
				<th>Mobile</th>
				<th>Birth_Date</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Status</th>

				</tr>";

				while($data = $result->fetch(PDO::FETCH_ASSOC))
				{

				echo"
				<tr>
				<td>".$data['u_id']."</td>
				<td>".$data['uaadhar_no']."</td>
				<td>".$data['name']."</td>
				<td>".$data['uname']."</td>
				<td>".$data['password']."</td>
				<td>".$data['con_password']."</td>
				<td>".$data['email']."</td>
				<td>".$data['address']."</td>
				<td>".$data['pincode']."</td>
				<td>".$data['city']."</td>
				<td>".$data['mobile']."</td>
				<td>".$data['birth_date']."</td>
				<td>".$data['age']."</td>
				<td>".$data['gender']."</td>
				<td>".$data['status']."</td>
				</tr>";
				}
				echo "</table></center>";
?>

