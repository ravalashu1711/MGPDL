<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$u_id = $_GET['u_id'];
	$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);

	// echo "<pre>";
	// print_r($data);
	// exit;
	
?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php?page=reg_form">Home</a>
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
						
						<form class="form-horizontal" action="middlepage/reg_action.php" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							  <div class="control-group">
					            <label class="control-label" for="input01">Photo:</label>
					            <div class="controls">
					           
					              <input type="file" class="input-large" value="<?php echo $data['photo']; ?>" id="input01" name="photo" required="">
					            </div>
					          </div>


							  <div class="control-group">
					            <label class="control-label" for="input01">Aadharcard No:</label>
					            <div class="controls">
					            <input type="hidden" value="<?php echo $data['u_id']; ?>" class="input-large" name="u_id" id="input01">
					              <input type="text" class="input-large" value="<?php echo $data['aadhar_no']; ?>" id="input01" name="aadhar_no" required="">
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Name:</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['name']; ?>" id="name" name="name" required="" onblur="return fname_fun();">
					              <center><label id="name_msg"></label></center>
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Username Or E-Mail :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['uname']; ?>" id="uname" name="uname" required="" onblur="return uname_fun();">
					              <center><label id="uname_msg"></label></center>
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Password :</label>
					            <div class="controls">
					              <input type="Password" class="input-large"value="<?php echo $data['password']; ?>" id="password" name="password" required="" onblur="document.getElementById('con_password').value=document.getElementById('password').value">
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Confirm_Password :</label>
					            <div class="controls">
					              <input type="Password" class="input-large"value="<?php echo $data['con_password']; ?>" id="con_password" name="con_password" required="" onblur="return confirmpass_fun();">
					              <center><label id="password_msg"></label></center>
					            </div>
					          </div>
							  
							   <div class="control-group">
					            <label class="control-label" for="input01">Email:</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['email']; ?>" id="email" name="email" required="" onblur="return email_fun();">
					              <center><label id="email_msg"></label></center>
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="textarea">Address:</label>
					            <div class="controls">
					              <textarea class="input-large" id="address" onblur="return address_fun();" rows="3" name="address" required="" ><?php echo $data['address']; ?></textarea>
					              <center><label id="address_msg"></label></center>
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="textarea">Pincode:</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['pincode']; ?>" id="pincode" name="pincode" required="" onblur="return pincode_fun();">
					              <center><label id="address_msg"></label></center>
					            </div>
					          </div>
							  
							   <div class="control-group">
					            <label class="control-label" for="select01">City:</label>
					            <div class="controls">

					              <select id="city" name="city" required="">
							 		<option value="none">-------------------------------------------------------- Select City ----------------------------------------------------------------</option>
					                <option value="Ambaliyasan">Ambaliyasan</option>
									<option value="Becharaji">Becharaji</option>
					                <option value="Gozaria">Gozaria</option>
					                <option value="Jhulasan">Jhulasan</option>
									<option value="Kadi">Kadi</option>
									<option value="Kheralu">Kheralu</option>
									<option value="Mehsana">Mehsana</option>
									<option value="Unjha">Unjha</option>
									<option value="Vadnagar">Vadnagar</option>
									<option value="Vijapur">Vijapur</option>
									<option value="Visnagar">Visnagar</option>
								  </select>

					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Mobile:</label>
					            <div class="controls">
					            	<input type="text" class="input-large" value="+91" id="input01" name="" readonly size="3"	style="height:20px;width:25px;">
					              <input type="text" class="input-large" id="mobile" value="<?php echo $data['mobile']; ?>" name="mobile" required="" onblur="return mobile_fun();">
					              <center><label id="mobile_msg"></label></center>
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Birth Date :</label>
					            <div class="controls">
					              <input type="date" value="<?php echo $data['birth_date']; ?>" class="input-large" id="input01" name="birth_date" required="" onblur="return birthdate_fun();">
					            </div>
					          </div>
							  
							   <div class="control-group">
					            <label class="control-label" for="input01">Age:</label>
					            <div class="controls">
					              <input type="number" class="input-large" id="age" value="<?php echo $data['age']; ?>" name="age" required="" onblur="return age_fun();">
					              <center><label id="age_msg"></label></center>
					            </div>
					          </div>
							  
							   <div class="control-group">
					            <label class="control-label">Gender:</label>
					            <div class="controls">
					              <label class="radio" required="">
					                <input type="radio" name="gender" id="optionsRadios1" value="Male" <?php if($data['gender'] == 'Male') { ?> checked="checked" <?php } ?>>
					                Male
					              </label>
					              <label class="radio">
					                <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php if($data['gender'] == 'Female') { ?> checked="checked" <?php } ?>>
					                Female
					              </label>
					            </div>
					          </div>
							  
							 
					          <div class="form-actions">
					            <button type="submit" class="btn btn-primary btn-large" name="submit" id="submit">Submit</button>
					            
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
