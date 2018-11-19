
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li><a href="index.php?page=new_license_form">Home</a></li>
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
<th>New License Id:</th>
<th>Document:</th>
<th>License Category</th>
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
<th>Status:</th>
<th>Created_Date:</th>
<th>Updated_Date:</th>
<th>Action:</th>
</tr>
</thead>
<tbody>
<?php 
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$i=1;
$sql = "SELECT * FROM `new_license`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

?>
<tr class="odd gradeX">
<td><?php echo $data['nl_id']; ?></td>
<td><img src="img/<?php echo $data['document'] ?>" style="height:50px;width:50px;"></td>
<td><?php echo $data['lic_cat']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['pincode']; ?></td>
<td><?php echo $data['state']; ?></td>
<td><?php echo $data['country']; ?></td>
<td><?php echo $data['mobile']; ?></td>
<td><?php echo $data['birth_date']; ?></td>
<td><?php echo $data['place_of_birth']; ?></td>
<td><?php echo $data['age']; ?></td>
<td><?php echo $data['b_group']; ?></td>
<td><?php echo $data['education']; ?></td>
<td><a href="index.php?page=renew_license_action&rl_id=<?php echo $data['rl_id']; ?>&status=<?php echo $data['status'];?>"><?php echo $data['status']; ?></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>

<a href = "index.php?page=new_license_form&nl_id=<?php echo $data['nl_id']; ?>" class="btn btn-info">Edit</a> 
<a href = "index.php?page=new_license_action&nl_id=<?php echo $data['nl_id']; ?>" class="btn btn-danger">Delete</a>

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
