<?php
if($_GET['lic_id'] != '')
{
	$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$rl_id = $_GET['lic_id'];
	$sql = "SELECT * FROM `license_type` WHERE `lic_id`='$rl_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);

}
	?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			   <a href="index.php?page=license_type_form">Home</a>
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
						
						<form class="form-horizontal" action="middlepage/license_type_action.php" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							 
							  <div class="control-group">
					            <label class="control-label" for="input01">License Type :</label>
					            <div class="controls">
					             <input type="hidden" value="<?php echo $data['lic_id']; ?>" class="input-large" name="lic_id" id="input01">
					              <input type="text" name="lic_type" class="input-large" value="<?php echo $data['lic_type'] ?>" required>
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
