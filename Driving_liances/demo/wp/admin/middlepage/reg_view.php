
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=reg_form">Home</a> 
</li>
</ul>

</div> <!-- /.page-title -->



<div class="row">

<div class="span12">

<div class="widget widget-table">

<div class="widget-header">						
<h3>
<i class="icon-th-list"></i>
Data Table Plugin							
</h3>
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
<th>Created_Date</th>
<th>Updated_Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
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
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=reg_form&u_id=<?php echo $data['u_id']; ?>" class="btn btn-info">Edit</a>  
<a href = "index.php?page=reg_action&u_id=<?php echo $data['u_id']; ?>" class="btn btn-danger">Delete</a>
</td>
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
