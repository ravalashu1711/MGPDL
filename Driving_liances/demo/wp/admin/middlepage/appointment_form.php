<?php
	$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$ap_id = $_GET['ap_id'];
	$sql = "SELECT * FROM `appointment` WHERE `ap_id`='$ap_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);
?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php?page=appointment_form">Home</a>
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
						
						<form class="form-horizontal" action="middlepage/appointment_action.php" method="post" enctype="multipart/form-data">
					        <fieldset>
					         
							 <div class="control-group">
					            <label class="control-label" for="select01">User_Id :</label>
					            <div class="controls">
					            <input type="hidden" value="<?php echo $data['ap_id']; ?>" class="input-large" name="ap_id" id="input01">
					              <input type="text" value="<?php echo $data['u_id']; ?>" class="input-large" name="u_id" id="input01"> 
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="select01">Candidate Name:</label>
					            <div class="controls">
					              <input type="text" value="<?php echo $data['name']; ?>" class="input-large" name="name" id="input01"> 
					            </div>
					          </div>
								
							 <div class="control-group">
					            <label class="control-label" for="select01">Appointment Type :</label>
					            <div class="controls">
					              <input type="text" value="<?php echo $data['ap_type']; ?>" class="input-large" name="ap_type" id="input01"> 
					            </div>
					          </div>							  
							  
					           <div class="control-group">
					            <label class="control-label" for="input01">Appintment Date :</label>
					            <div class="controls">
					              <input type="date" value="<?php echo $data['ap_date']; ?>" class="input-large" id="input01" name="ap_date" required="">
					            </div>
					          </div>
							  							  
					          <div class="form-actions">
					            <button type="submit" class="btn btn-primary btn-large" name="submit">Submit</button>
					            
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
