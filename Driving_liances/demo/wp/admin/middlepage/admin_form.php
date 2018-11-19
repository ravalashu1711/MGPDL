
<?php
	$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$a_id = $_GET['a_id'];
	$sql = "SELECT * FROM `admin_login` WHERE `a_id`='$a_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);
?>


<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			   <a href="index.php?page=admin_form">Home</a>
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
						
						<form class="form-horizontal" action="index.php?page=admin_action" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							 <div class="control-group">
									<label class="control-label" for="fileInput" >photo</label>
									<div class="controls">
									<?php
										if($data['photo'] == true)
										{
									 ?>
									  <img src="upload/<?php echo $data['photo']; ?>" alt="<?php echo $data['photo']; ?>" style="height:80px;width:80px;"/><br>
									  <input type="hidden" name="photo" value="<?php echo $data['photo']; ?>"  />
									 <?php 
										}
									 ?>

								
									<input type="file"  class="input-large" id="input01" name="photo" type="file">
									</div>
								  </div>


							  <div class="control-group">
					            <label class="control-label" for="input01">Name :</label>
					            <div class="controls">
					            	 <input type="hidden" value="<?php echo $data['a_id']; ?>" class="input-large" name="a_id" id="input01">
					              <input type="text" value="<?php echo $data['name']; ?>" class="input-large" id="name" name="name" >
					              <center><label id="name_msg"></label></center>
								 </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="select01">Email Id:</label>
					            <div class="controls">
					              <input type="text" class="input-large" id="email" onblur="return email_fun();"  name="email"  value="<?php echo $data['email'];?>">
					              <center><label id="email_msg"></label></center>
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Password :</label>
					            <div class="controls">
					              <input type="text" class="input-large"value="<?php echo $data['password']; ?>" id="password" name="password" required="" onblur="document.getElementById('con_password').value=document.getElementById('password').value">
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Confirm_Password :</label>
					            <div class="controls">
					              <input type="text" class="input-large"value="<?php echo $data['con_password']; ?>" onblur="return confirmpass_fun();" id="con_password" name="con_password" required="">
					              <center><label id="password_msg"></label></center>
					            </div>
					          </div>
							  
					          <div class="control-group">
					            <label class="control-label">Status :</label>
					            <div class="controls">
					              <label class="radio" required="">
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
					            <button type="submit" class="btn btn-primary btn-large" id="submit" name="submit">Submit</button>
					            
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
		    </div> <!-- /span8 -->
		    
		</div> <!-- /row -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
