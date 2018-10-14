<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$rl_id = $_GET['rl_id'];
	$sql = "SELECT * FROM `renew_license` WHERE `rl_id`='$rl_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);
?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			   <a href="index.php?page=renew_license_form">Home</a>
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
						
						<form class="form-horizontal" action="middlepage/renew_license_action.php" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							 
							  <div class="control-group">
					            <label class="control-label" for="input01">Name :</label>
					            <div class="controls">
					             <input type="hidden" value="<?php echo $data['rl_id']; ?>" class="input-large" name="rl_id" id="input01">
					              <input type="text" class="input-large" value="<?php echo $data['name']; ?>" id="input01" name="name" required="">
					            </div>
					          </div>
							  
							   <div class="control-group">
					            <label class="control-label" for="input01">License Category :</label>
					            <div class="controls">
					              <select id="lic_cat" name="lic_cat" required="">
							 		<option>----------------------------------------------------------- Select Category --------------------------------------------------------------------</option>
					                <option <?php if($data['lic_cat']=='Motorcycle 50cc') { ?> selected <?php } ?>>Motorcycle 50cc</option>
									<option <?php if($data['lic_cat']=='Motorcycle more than 50cc') { ?> selected <?php } ?>>Motorcycle more than 50cc</option>
					                <option <?php if($data['lic_cat']=='FVG-Motorcycles') { ?> selected <?php } ?>>FVG-Motorcycles</option>
					                <option <?php if($data['lic_cat']=='Motorcycle With Gear') { ?> selected <?php } ?>>Motorcycle With Gear</option>
									<option <?php if($data['lic_cat']=='Light Motor Vehicle') { ?> selected <?php } ?>>Light Motor Vehicle</option>
									<option <?php if($data['lic_cat']=='Light Motor Vehicle-Non Transport') { ?> selected <?php } ?>>Light Motor Vehicle-Non Transport</option>
									<option <?php if($data['lic_cat']=='Light Motor Vehicle-Transport') { ?> selected <?php } ?>>Light Motor Vehicle-Transport</option>
									<option <?php if($data['lic_cat']=='Heavy Motor Vehicle') { ?> selected <?php } ?>>Heavy Motor Vehicle</option>
									<option <?php if($data['lic_cat']=='Heavy Passenger Motor Vehicle') { ?> selected <?php } ?>>Heavy Passenger Motor Vehicle</option>
									<option <?php if($data['lic_cat']=='Trans') { ?> selected <?php } ?>>Transport For All</option>
									<option <?php if($data['lic_cat']=='TRAILOR') { ?> selected <?php } ?>>TRAILOR</option>
								</select>
					            </div>
					          </div>


							  <div class="control-group">
					            <label class="control-label" for="input01">Email_Id :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['email']; ?>" id="input01" name="email" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Address :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['address']; ?>" id="input01" name="address" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Pincode :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['pincode']; ?>" id="input01" name="pincode" required="">
					            </div>
					          </div>

					           <div class="control-group">
					            <label class="control-label" for="input01">City :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['city']; ?>" id="input01" name="city" required="">
					            </div>
					          </div>

					           <div class="control-group">
					            <label class="control-label" for="input01">State :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['state']; ?>" id="input01" name="state" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Country :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['country']; ?>" id="input01" name="country" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Mobile :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['mobile']; ?>" id="input01" name="mobile" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Birth_Date :</label>
					            <div class="controls">
					              <input type="date" class="input-large" value="<?php echo $data['birth_date']; ?>" id="input01" name="birth_date" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Place Of Birth :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['place_of_birth']; ?>" id="input01" name="state" required="">
					            </div>
					          </div>
					         
					         <div class="control-group">
					            <label class="control-label" for="input01">Age :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['age']; ?>" id="input01" name="age" required="">
					            </div>
					          </div>
					          
					          <div class="control-group">
					            <label class="control-label" for="input01">Blood Group :</label>
					            <div class="controls">
					              <select id="select01" name="b_group" required="">
					                <option value="None">----------------------------------- Select Blood-Group ---------------------------------------</option>
					                <option <?php if($data['b_group']=='A+') { ?> selected <?php } ?>>A+</option>
					                <option <?php if($data['b_group']=='A-') { ?> selected <?php } ?>>A-</option>
					                <option <?php if($data['b_group']=='AB+') { ?> selected <?php } ?>>AB+</option>
									<option <?php if($data['b_group']=='AB-') { ?> selected <?php } ?>>AB-</option>
									<option <?php if($data['b_group']=='O+') { ?> selected <?php } ?>>O+</option>
									<option <?php if($data['b_group']=='O-') { ?> selected <?php } ?>>O-</option>
								  </select>
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Education :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['education']; ?>" id="input01" name="education" required="">
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
