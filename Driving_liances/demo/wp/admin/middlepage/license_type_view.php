
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=license_type_form">Home</a>
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
<th>Lic id</th>
<th>Lic type</th>
<th>Created_Date</th>
<th>Updated_Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$n=1;
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$sql = "SELECT * FROM `license_type`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $n++;//$data['ap_id']; ?></td>
<td><?php echo $data['lic_type']; ?></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=license_type_form&lic_id=<?php echo $data['lic_id']; ?>" class="btn btn-info">Edit</a> 
<a href = "index.php?page=license_type_action&lic_id=<?php echo $data['lic_id']; ?>" class="btn btn-danger">Delete</a>
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
