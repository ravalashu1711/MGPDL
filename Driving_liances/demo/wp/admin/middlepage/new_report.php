<div id="content">

<div class="container">

<div id="page-title" class="clearfix">

<ul class="breadcrumb">
<li>
<b><u>NEW LICENSE REPORT</u></b></li></ul>
</div> <!-- /.page-title -->

<div class="row">

<div class="span12">

<div class="widget widget-table">

<div class="widget-header">						
<h3>
<i class="icon-th-list"></i>
Data Table Plugin							
</h3>
<form action="index.php?page=new_search" method="post" enctype="multipart/form-data">

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

<th>Reg_No:</th>
<th>Document:</th>
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
<th>Created_Date:</th>
<th>Updated_Date:</th>

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

// echo "<pre>";
// print_r($data);

?>
<tr class="odd gradeX">
<td><?php echo $data['nl_id']; ?></td>
<td><img src="../Driving_liances/demo/wp/upload/<?php echo $data['document']; ?>" style="height:50px;width:50px;"></td>
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