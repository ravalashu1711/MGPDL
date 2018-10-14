<link rel="stylesheet" type="text/css" href="css/highslide.css" />
<link rel="stylesheet" type="text/css" href="css/highslide-ie6.css" media="all" />
<script type="text/javascript" src="js/highslide-with-html.js"></script>
<script type="text/javascript">
	hs.graphicsDir = 'images/graphics/';
	hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'draggable-header';
</script>


<?PHP

include "include/config.php";

?>


<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php?page=gallary_form" class="btn btn-info">Gallry_Form</a>
			  
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

									<th>Id</th>
									
									<th>Title</th>
									<th>Photo</th>
									<th>Status</th>
									<th>discription</th>
									<th>created_date</th>
									<th>Updated_date</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>

																

									
							<?php
									$con = new PDO('mysql:host=localhost;dbname=license','root','123');
									$sql="SELECT * FROM `gallary`";
									$query=$con->query($sql);
									$i=1;
									while($data=$query->fetch(PDO::FETCH_ASSOC))
									{
									?>
										<tr Class="odd gradex">
										<td><?php echo $i++;?></td>
										<td><?php echo $data['title']; ?></td>
										<td><a href="upload/<?php echo $data['photo']; ?>" class="highslide" onclick="return hs.expand(this)"><strong><?php echo stristr($data['photo'],"j",true); ?></strong></a>
									</td>
										<td>
										<a href="index.php?page=gallary_action&g_id=<?php echo $data['g_id']; ?>&status=<?php echo $data['status']; ?>">
										<?php echo $data['status']; ?></a></td>
										<td><?php echo $data['discription']; ?></td>
										<td><?php echo $data['created_date']; ?></td>
										<td><?php echo $data['updated_date']; ?></td>
										<td>
										<a href="index.php?page=gallary_form&g_id=<?php echo $data['g_id']; ?>" class="btn btn-info">Edit</a> | 
										<a href="index.php?page=gallary_action&g_id=<?php echo $data['g_id']; ?>" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php } ?>
								
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->

		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->