<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<b><u>APPOINTMENT REPORT</u></b></li></ul>
</div> <!-- /.page-title -->

<div class="row">

<div class="span12">

<div class="widget widget-table">

<div class="widget-header">						
<h3>
<i class="icon-th-list"></i>
Data Table Plugin							
</h3>
<form action="index.php?page=app_search" method="post" enctype="multipart/form-data">

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

<th>Appointment No</th>
<th>User_ID</th>
<th>Name :</th>
<th>Appointment Date :</th>
<th>Appointment Type :</th>
<th>Created_Date</th>
<th>Updated_Date</th>

</tr>
</thead>
<tbody>
<?php 
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$i=1;
$sql = "SELECT * FROM `appointment`";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $data['ap_id']; ?></td>
<td><?php echo $data['u_id']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['ap_date']; ?></td>
<td><?php echo $data['ap_type']; ?></td>
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