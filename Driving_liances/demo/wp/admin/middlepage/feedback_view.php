
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li><a href="index.php?page=feedback_form">Home</a></li>
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
<th>FD_Id</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
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
$sql = "SELECT * FROM `feedback`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $i++;//$data['fd_id']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['subject']; ?></td>
<td><?php echo $data['message']; ?></td>
<td><a href="index.php?page=feedback_action&fd_id=<?php echo $data['fd_id']; ?>&status=<?php echo $data['status'];?>"><?php echo $data['status']; ?></a></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=feedback_form&fd_id=<?php echo $data['fd_id']; ?>" class="btn btn-info">Edit</a>  
<a href = "index.php?page=feedback_action&fd_id=<?php echo $data['fd_id']; ?>" class="btn btn-danger">Delete</a>
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
