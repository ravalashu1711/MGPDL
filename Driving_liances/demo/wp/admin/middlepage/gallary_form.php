<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
$id = $_GET['g_id'];

$sql = "SELECT * FROM `gallary` WHERE `g_id`='$id'";
$query = $con->query($sql);

$data = $query->fetch(PDO::FETCH_ASSOC);




// echo "<pre>";
// print_r($hb);

?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php?page=gallary_form" class="btn btn-info">Gallry_Form</a>
			  </li>
			  
			</ul>
			
		</div> <!-- /.page-title -->
		
		<div class="row">
			
			<div class="span12">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Horizontal Layout	      					
      					</h3>	
      				</div> <!-- /widget-header -->

						<div class="widget-content">
							<form class="form-horizontal" action="index.php?page=gallary_action" method="post" enctype="multipart/form-data">
								<fieldset>
								  
								  <div class="control-group">
									<label class="control-label" for="input01">Title</label>
									<div class="controls">
									<input type="hidden" class="input-large" id="input01"   name="g_id" value="<?php echo $data['g_id'];?>">
									  <input type="text" class="input-large" id="input01"   name="title" value="<?php echo $data['title'];?>">
								   </div>
								  </div>

								  <div class="control-group">
									<label class="control-label" for="fileInput" >photo</label>
									<div class="controls">
									<?php
										if($data['photo'] == true)
										{
									 ?>
									  <img src="upload/<?php echo $data['photo']; ?>" alt="<?php echo $data['photo']; ?>" style="height:80px;width:80px;"/><br>
									  <input type="hidden" name="old_img" value="<?php echo $data['photo']; ?>"  />
									 <?php 
										}
									 ?>

								
									<input type="file"  class="input-large" id="input01" name="photo" type="file">
									</div>
								  </div>

								  
								  <div class="control-group">
									<label class="control-label" for="input01">Discription</label>
									<div class="controls">
									  <input type="text" class="input-large" id="input01"   name="discription" value="<?php echo $data['discription'];?>">
								   </div>
								  </div>
								  
								  
								  
								  <div class="control-group">
									<label class="control-label" for="input01">Status</label>
									<div class="controls">
									  <input type="radio"  value="Active" name="status" <?php if($data['status']=='Active') { echo "checked='checked'"; } ?>>
										
									   Active
									  </label>
									  <label class="radio">
									  
										<input type="radio"  value="Inactive" name="status" <?php if($data['status']=='Inactive') { echo "checked='checked'"; } ?>>
										
										
									   Inactive
									</div>
								  </div>

								  
								  
								  <div class="form-actions">
									<button type="submit" class="btn btn-primary btn-large" name="submit">Submit</button>
									<button class="btn btn-large" name="cancle">Cancel</button>
								  </div>
							</fieldset>
						</form>	
	
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->

	<div id="content">
		
	
		
		
		
		
	</div> <!-- /.container -->

</div> <!-- /#content -->
