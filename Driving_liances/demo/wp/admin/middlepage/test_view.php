
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<button><a href="index.php?page=test_form">Insert</a></button>
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
	<th>t_id</th>
	<th>Question</th>
	<th>Ans1</th>
	<th>Ans2</th>
	<th>Ans3</th>
	<th>Ans4</th>
	<th>Answer</th>
	<th>Created_Date</th>
	<th>Updated_Date</th>
	
</tr>
</thead>
<tbody>
<?php 
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$sql = "SELECT * FROM `test`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{



// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $data['t_id']; ?></td>
<td><?php echo $data['question']; ?></td>
<td><?php echo $data['ans1']; ?></td>
<td><?php echo $data['ans2']; ?></td>
<td><?php echo $data['ans3']; ?></td>
<td><?php echo $data['ans4']; ?></td>
<td><?php echo $data['answer']; ?></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>

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
