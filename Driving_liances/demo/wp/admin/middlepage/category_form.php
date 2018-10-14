<?php
	$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$cat_id = $_GET['cat_id'];
	$sql = "SELECT * FROM `category` WHERE `cat_id`='$cat_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);
?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php?page=category_form">Home</a>
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
						
						<form class="form-horizontal" action="middlepage/category_action.php" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							  <div class="control-group">
					            <label class="control-label" for="input01">Name:</label>
					            <div class="controls">
					            	<input type="hidden" value="<?php echo $data['cat_id']; ?>" class="input-large" name="cat_id" id="input01">
					              <input type="text" value="<?php echo $data['cat_name']; ?>" class="input-large" id="input01" name="cat_name" required="">
					            </div>
					          </div>
							

					          <div class="control-group">
					            <label class="control-label">Status :</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="status" id="optionsRadios1" value="Active" <?php if($data['status'] == 'Active') { ?> checked="checked" <?php } ?>>
					                Active
					              </label>
					              <label class="radio">
					                <input type="radio" name="status" id="optionsRadios2" value="Inactive" <?php if($data['status'] == 'Inactive') { ?> checked="checked" <?php } ?>>
					                Inactive
					              </label>
					            </div>
					          </div>
							  
					          <div class="form-actions">
					            <button type="submit" class="btn btn-primary btn-large" name="submit">Submit</button>
					            <button type="reset" class="btn btn-large">Reset</button>
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
		    </div> <!-- /span8 -->
		    
		</div> <!-- /row -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
