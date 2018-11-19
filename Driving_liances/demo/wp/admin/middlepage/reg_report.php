<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<b><u>REGISTRATION REPORT</u></b></li></ul>
</div> <!-- /.page-title -->

<div class="row">

<div class="span12">

<div class="widget widget-table">

<div class="widget-header">						
<h3>
<i class="icon-th-list"></i>
Data Table Plugin							
</h3>
<form action="index.php?page=reg_search" method="post" enctype="multipart/form-data">

<h3>Date :
<input type="date" name="from_date" id="from_date" /></h3>


<h3>To
<input type="date" name="to_date" id="to_date" /></h3>

<button type="submit" name="submit" id="Submit">Search</button>
</form>
</div> <!-- /widget-header -->

<div class="widget-content">

<table class="table table-striped table-bordered table-highlight" id="example">
<thead>

<tr>

<th>U_Id</th>
<th>Photo</th>
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

</tr>
</thead>
<tbody>
<?php 
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$i=1;
$sql = "SELECT * FROM `user_reg`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $data['u_id']; ?></td>
<td><img src="img/<?php echo $data['photo']; ?>" style="height:50px;width:50px;"></td>
<td><?php echo $data['aadhar_no']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['uname']; ?></td>
<td><?php echo $data['password']; ?></td>
<td><?php echo $data['con_password']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['pincode']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['mobile']; ?></td>
<td><?php echo $data['birth_date']?></td>
<td><?php echo $data['age']; ?></td>
<td><?php echo $data['gender']; ?></td>
<td><a href="index.php?page=reg_action&u_id=<?php echo $data['u_id']; ?>&status=<?php echo $data['status'];?>"><?php echo $data['status']; ?></a></td>

</tr>
<?php
}
?>
</tbody>
</table>

</div> <!-- /widget-content -->

</div> <!-- /widget -->	

</div> <!-- /span12 -->

</div> <!-- /row -->

</div> <!-- /.container -->

</div> <!-- /#content -->