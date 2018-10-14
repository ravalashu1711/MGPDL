
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<a href="index.php?page=category_form">Insert</a></li>
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
<th>Cat_Id</th>
<th>Category Name</th>
<th>status</th>
<th>Created_Date</th>
<th>Updated_Date</th>
<th>action</th>
</tr>
</thead>
<tbody>
<?php 
	$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$i=1;
$sql = "SELECT * FROM `category`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $i++;//$data['cat_id']; ?></td>
<td><?php echo $data['cat_name']; ?></td>
<td><a href="index.php?page=category_action&cat_id=<?php echo $data['cat_id']; ?>&status=<?php echo $data['status'];?>"><?php echo $data['status']; ?></a></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=category_form&cat_id=<?php echo $data['cat_id']; ?>" class="btn btn-info">Edit</a>  
<a href = "index.php?page=category_action&cat_id=<?php echo $data['cat_id']; ?>" class="btn btn-danger">Delete</a>
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
