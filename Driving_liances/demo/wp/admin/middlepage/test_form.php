<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			   <a href="index.php?page=test_form">Home</a>
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
						
						<form class="form-horizontal" action="index.php?page=test_action1" method="post" enctype="multipart/form-data">
					        <fieldset>
					          
							  <div class="control-group">
					            <label class="control-label" for="input01">Enter No Of Field :</label>
					            <div class="controls">
					            	 
					              <input type="text" class="input-large" id="input01" name="num">
					            </div>
					          </div>
							  
					          <div class="form-actions">
					            <button type="submi0t" class="btn btn-primary btn-large" name="submit">Submit</button>
					            
					          </div>
					        </fieldset>
					      </form>	
						  
						  
						  <form class="form-horizontal" action="index.php?page=test_action" method="post" enctype="multipart/form-data">
					        <fieldset>
							
							<table>
							
							<?php
							
							$num = $_GET['num'];
											
								if($num !="")
								{			
									for($i=1;$i<=$num;$i++)
									{
											
							?>		
										<input type="hidden" value="<?php echo $num; ?>" name="num"/>
										<tr>
										 	<td>
										  		<div class="control-group">
								            		<label class="control-label" for="textarea">Question:</label>
								            		<div class="controls">
								            			<input type="hidden" value="" class="input-large" name="t_id" id="input01">
								              			<input type="text" placeholder="Enter Your <?php echo $i;?> Question" style="width:29.2em;" name="question[]"/>
								            		</div>
								          		</div>
										  	</td>
										</tr> 
								   		<tr>
											<td>
												<div class="control-group">
									            	<label class="control-label" for="input01">Ans1:</label>
									            	<div class="controls">
									              		<input type="text" class="input-large" id="input01" name="ans1[]" required="">
									            	</div>
									          	</div>
											</td>
											<td>
												<div class="control-group">
									            	<label class="control-label" for="input01">Ans2:</label>
									            	<div class="controls">
									              		<input type="text" class="input-large" id="input01" name="ans2[]" >
									            	</div>
									          	</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
										            <label class="control-label" for="input01">Ans3:</label>
										            <div class="controls">
										              <input type="text" class="input-large" id="input01" name="ans3[]" >
										            </div>
										        </div>
											</td>
								  			<td>
											  	<div class="control-group">
									            	<label class="control-label" for="input01">Ans4:</label>
									            	<div class="controls">
									              		<input type="text" class="input-large" id="input01" name="ans4[]" >
									            	</div>
									          	</div>
											</td>
										</tr>
										<tr>
											<td>					  
												<div class="control-group">
								            		<label class="control-label" for="select01">Answer:</label>
								            		<div class="controls">
										              	<select id="select01" name="answer[]">
										                	<option>---answer---</option>
															<option value="1">ans1</option>
															<option value="2">ans2</option>
															<option value="3">ans3</option>
															<option value="4">ans4</option>
										                </select>
								            		</div>
								          		</div>
										  	</td>
										</tr>
					        <?php
									}
									
								}
								else
								{						
							?>

										<input type="hidden" value="<?php echo $num; ?>" name="num"/>
										<tr>
										 	<td>
										  		<div class="control-group">
								            		<label class="control-label" for="textarea">Question:</label>
								            		<div class="controls">
								            			<input type="hidden" value="" class="input-large" name="t_id" id="input01">
								              			<input type="text" placeholder="Enter Your <?php echo $i;?> Question" style="width:29.2em;" name="question[]"/>
								            		</div>
								          		</div>
										  	</td>
										</tr> 
								   		<tr>
											<td>
												<div class="control-group">
									            	<label class="control-label" for="input01">Ans1:</label>
									            	<div class="controls">
									              		<input type="text" class="input-large" id="input01" name="ans1[]" required="">
									            	</div>
									          	</div>
											</td>
											<td>
												<div class="control-group">
									            	<label class="control-label" for="input01">Ans2:</label>
									            	<div class="controls">
									              		<input type="text" class="input-large" id="input01" name="ans2[]" >
									            	</div>
									          	</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="control-group">
										            <label class="control-label" for="input01">Ans3:</label>
										            <div class="controls">
										              <input type="text" class="input-large" id="input01" name="ans3[]" >
										            </div>
										        </div>
											</td>
								  			<td>
											  	<div class="control-group">
									            	<label class="control-label" for="input01">Ans4:</label>
									            	<div class="controls">
									              		<input type="text" class="input-large" id="input01" name="ans4[]" >
									            	</div>
									          	</div>
											</td>
										</tr>
										<tr>
											<td>					  
												<div class="control-group">
								            		<label class="control-label" for="select01">Answer:</label>
								            		<div class="controls">
										              	<select id="select01" name="answer[]">
										                	<option>---answer---</option>
															<option value="1">ans1</option>
															<option value="2">ans2</option>
															<option value="3">ans3</option>
															<option value="4">ans4</option>
										                </select>
								            		</div>
								          		</div>
										  	</td>
										</tr>
							<?php
								}
							?>							
										<tr>
											<td>
								          		<div class="form-actions">
								            		<button type="submit" class="btn btn-primary btn-large" name="submit">Submit</button>
								            	</div>
										  	</td>
										</tr>
									</table>
					</form>
							  
							 
						
					</div> <!-- /widget-content -->
						
				</div>	
				
		    </div> <!-- /span8 -->
		    
		</div> <!-- /row -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
