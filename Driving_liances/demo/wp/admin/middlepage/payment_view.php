
<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li><a href="index.php?page=payment_form">Home</a></li>
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

<th>Payment No</th>
<th>User_ID</th>
<th>Name Of Candidate:</th>
<th>Payment For :</th>
<th>Amount :</th>
<th>Payment Using :</th>
<th>Card Belongs To Which Bank :</th>
<th>Created_Date</th>
<th>Updated_Date</th>
<th>Action:</th>

</tr>
</thead>
<tbody>
<?php 
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$i=1;
$sql = "SELECT * FROM `user_reg`";
$query = $con->query($sql);

$sql1 = "SELECT * FROM `payment`";
$query1 = $con->query($sql1);

while($data = $query1->fetch(PDO::FETCH_ASSOC))
{

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $data['pay_id']; ?></td>
<td><?php echo $data['u_id']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['pay_type']; ?></td>
<td><?php echo $data['amount']; ?></td>
<td><?php echo $data['pay_by']; ?></td>
<td><?php echo $data['bank']; ?></td>
<td><?php echo $data['created_date']; ?></td>
<td><?php echo $data['updated_date']; ?></td>
<td>
<a href = "index.php?page=payment_form&pay_id=<?php echo $data['pay_id']; ?>" class="btn btn-info">Edit</a>  
<a href = "index.php?page=payment_action&pay_id=<?php echo $data['pay_id']; ?>" class="btn btn-danger">Delete</a>
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
