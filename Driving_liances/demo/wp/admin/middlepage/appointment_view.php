
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=appointment_form">Home</a>
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
<th>Ap_Id</th>
<th>User_Id</th>
<th>Candidate Name</th>
<th>Appointment Type</th>
<th>Ap_Date</th>
<th>Action</th>
<th>Created_Date</th>
<th>Updated_Date</th>
</tr>
</thead>
<tbody>
<?php 
$n=1;
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$sql = "SELECT * FROM `appointment`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $n++;//$data['ap_id']; ?></td>
<td><?php echo $data['u_id']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['ap_type']; ?></td>
<td><?php echo $data['ap_date']; ?></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=appointment_form&ap_id=<?php echo $data['ap_id']; ?>" class="btn btn-info">Edit</a> 
<a href = "index.php?page=appointment_action&ap_id=<?php echo $data['ap_id']; ?>" class="btn btn-danger">Delete</a>
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
