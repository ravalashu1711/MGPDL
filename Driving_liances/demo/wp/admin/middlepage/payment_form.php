<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$pay_id = $_GET['pay_id'];
	$sql = "SELECT * FROM `payment` WHERE `pay_id`='$pay_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);
?>
<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			   <a href="index.php?page=payment_form">Home</a>
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
						
						<form class="form-horizontal" action="middlepage/payment_action.php" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							  <div class="control-group">
					            <label class="control-label" for="input01">User Id:</label>
					            <div class="controls">
					            	<input type="hidden" value="<?php echo $data['pay_id']; ?>" class="input-large" name="pay_id" id="input01">
					            	<input type="text" class="input-large" value="<?php echo $data['u_id']; ?>" id="input01" name="u_id" required="">
					             
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Name:</label>
					            <div class="controls">
					            	
					            	<input type="text" class="input-large" value="<?php echo $data['name']; ?>" id="input01" name="name" required="">
					             
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Payment For:</label>
					            <div class="controls">
					            	
					            	<input type="text" class="input-large" value="<?php echo $data['pay_type']; ?>" id="input01" name="pay_type" required="">
					             
					            </div>
					          </div>

							
							<div class="control-group">
					            <label class="control-label" for="input01">Amount :</label>
					            <div class="controls">
					              <input type="text" class="input-large" value="<?php echo $data['amount']; ?>" id="input01" name="amount" required="">
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Payment Using :</label>
					            <div class="controls">
					              <select id="pay_by" name="pay_by" required="">
							 		<option>-------------------------------------------------------- Select ----------------------------------------------------------------</option>
					                <option <?php if($data['pay_by']=='DebitCard') { ?> selected <?php } ?>>Debit Card</option>
									<option <?php if($data['pay_by']=='CreditCard') { ?> selected <?php } ?>>Credit Card</option>
					                <option <?php if($data['pay_by']=='SmartCard') { ?> selected <?php } ?>>Smart Card</option>
					                </select>
					            </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Amount :</label>
					            <div class="controls">
					              <select id="bank" name="bank" required="">
							 		<option>-------------------------------------------------------- Select ----------------------------------------------------------------</option>
					                <option <?php if($data['bank']=='SBI') { ?> selected <?php } ?>SBI">State Bank Of India (SBI)</option>
									<option <?php if($data['bank']=='BOB') { ?> selected <?php } ?>>Bank Of Baroda</option>
					                <option <?php if($data['bank']=='DENA') { ?> selected <?php } ?>>DENA Bank</option>
					                <option <?php if($data['bank']=='INDIAN') { ?> selected <?php } ?>>Bank Of India</option>
					                <option <?php if($data['bank']=='AXIS') { ?> selected <?php } ?>">AXIS Bank</option>
					                <option <?php if($data['bank']=='ICICI') { ?> selected <?php } ?>>ICICI Bank</option>
					                </select>
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
