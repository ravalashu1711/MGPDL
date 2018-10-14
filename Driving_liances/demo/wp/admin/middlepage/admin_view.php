
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li><a href="index.php?page=admin_form">Home</a></li>
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
<th>Admin_Id</th>
<th>Photo</th>
<th>Name</th>
<th>E-Mail</th>
<th>Password</th>
<th>Confirm Password</th>
<th>Status</th>
<th>Created_Date</th>
<th>Updated_Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
	$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$i=1;
$sql = "SELECT * FROM `admin_login`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

?>
<tr class="odd gradeX">
<td><?php echo $i++;//$data['a_id']; ?></td>
<td><a href="upload/<?php echo $data['photo']; ?>" class="highslide" onclick="return hs.expand(this)"><strong><?php echo stristr($data['photo'],"j",true); ?></strong></a>
</td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['password']; ?></td>
<td><?php echo $data['con_password']; ?></td>
<td><a href="index.php?page=admin_action&a_id=<?php echo $data['a_id']; ?>&status=<?php echo $data['status'];?>"><?php echo $data['status']; ?></a></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=admin_form&a_id=<?php echo $data['a_id']; ?>" class="btn btn-info">Edit</a>  
<a href = "index.php?page=admin_action&a_id=<?php echo $data['a_id']; ?>" class="btn btn-danger">Delete</a>
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