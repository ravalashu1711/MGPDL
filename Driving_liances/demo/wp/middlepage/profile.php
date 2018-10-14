	<div class="responsive-menu">
		<a href="flowers.html" class="responsive-menu-close">Close <i class="fa fa-times"></i></a>
		<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
					<form action="http://premiumlayers.net/demo/wp/drivepro" method="get" id="responsive-nav-search-form" class="search-form">
				<input type="search" name="s" id="responsive-menu-search" placeholder="Search Here" value="">
				<input name="post_type" type="hidden" value="post" />
				<button type="submit"><i class="fa fa-search"></i></button>
			</form> <!-- end .search-form -->
			</div> <!-- end .responsive-menu -->
	<div id="pageCover" class="page-title transparent" style="background-image: url(http://premiumlayers.net/demo/wp/drivepro/wp-content/themes/drivepro/images/background01.jpg)">
			
	        <div class="inner">
		        <h3>
					Profile
				</h3>	
			</div>
			 </div>
	<section id="blogs" class="section white">
	<div class="inner">
		<div class="container">
			
	<div class="blog-post-post-comment">
		<h5>Profile</h5>
		
		<?php
		$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	
		if(isset($_POST['submit']) == true)
		{
			$u_id = $_SESSION['userId'];
			$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id'";
			$query = $con->query($sql);
			$data = $query->fetch(PDO::FETCH_ASSOC);
			?>



			<form class="form-horizontal" action="index.php?page=profile_action" method="post" enctype="multipart/form-data">

				<table>

				<tr>
				<td style="height: 50%;width: 50%;">
					
					<?php
										if($data['photo'] == true)
										{
									 ?>
									  <img src="upload/<?php echo $data['photo']; ?>" alt="<?php echo $data['photo']; ?>" style="height:500px;width:500px;"/><br><br>
									  <input type="hidden" name="old_img" value="<?php echo $data['photo']; ?>"  />
									 <?php 
										}
									 ?>

								
									<input type="file"  class="input-large" id="input01" name="photo" type="file">
					<td>

					<div class="col-sm-6">
							
							<label  for="user_login"><b>Aadhar No :</b></label>
							<input type="hidden" name="u_id" id="u_id" value="<?php echo $data['u_id'];?>>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" name="aadhar_no" id="aadhar_no" value="<?php echo $data['aadhar_no']; ?>" size="22" tabindex="1" aria-required='true' />
							</div>
					</div>


					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Name :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-with-icon" name="name" id="name" title="Name" value="<?php echo $data['name']; ?>" size="22" tabindex="1" aria-required='true' required="" onblur="return fname_fun();" />
							</div>
					</div>

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Username :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" name="uname" id="uname" title="Uname" value="<?php echo $data['uname']; ?>" size="22" required="" tabindex="1" aria-required='true' onblur="return uname_fun();" />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Password :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-with-icon" name="password" id="password" title="password" value="<?php echo $data['password']; ?>" size="22" required="" tabindex="1" aria-required='true' onblur="document.getElementById('con_password').value=document.getElementById('password').value"/>
									
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Confirm Password :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-with-icon" name="con_password" id="con_password" title="con_password" value="<?php echo $data['con_password']; ?>" size="22" tabindex="1" aria-required='true' required="" onblur="return confirmpass_fun();"/>
									
							</div>
					</div>
					
					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Email_Id :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" name="email" id="email" value="<?php echo $data['email']; ?>" title="Email" value="" size="22" required="" tabindex="1" aria-required='true' onblur="return uname_fun();" />
							</div>
					</div>
					

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Address :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<textarea id="address" name="address" value="" class="form-with-icon" title="Address" rows="3" tabindex="2" required="" aria-required='true' onblur="return address_fun();"><?php echo $data['address']; ?></textarea> 
							</div>
					</div>	

					<div class="col-sm-6">
							<div class="form-group">
									<br><br>
									<br><br>
									<input type="text" class="form-with-icon" name="pincode" id="pincode" title="Pincode" value="<?php echo $data['pincode']; ?>" size="22" tabindex="1" aria-required='true' />

							</div>
					</div>	


					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>City :</b></label>
							<div class="form-group">
								
								<select id="city" name="city" required="">
							 		<option value="none">-------------------------------------------------------- Select City ----------------------------------------------------------------</option>
					                <option <?php if($data['city']=='Ambaliyasan') { ?> selected <?php } ?>>Ambaliyasan</option>
									<option <?php if($data['city']=='Becharaji') { ?> selected <?php } ?>>Becharaji</option>
					                <option <?php if($data['city']=='Gozaria') { ?> selected <?php } ?>>Gozaria</option>
					                <option <?php if($data['city']=='Jhulasan') { ?> selected <?php } ?>>Jhulasan</option>
									<option <?php if($data['city']=='Kadi') { ?> selected <?php } ?>>Kadi</option>
									<option <?php if($data['city']=='Kheralu') { ?> selected <?php } ?>>Kheralu</option>
									<option <?php if($data['city']=='Mahesana') { ?> selected <?php } ?>>Mehsana</option>
									<option <?php if($data['city']=='Unjha') { ?> selected <?php } ?>>Unjha</option>
									<option <?php if($data['city']=='Vadnagar') { ?> selected <?php } ?>>Vadnagar</option>
									<option <?php if($data['city']=='Vijapur') { ?> selected <?php } ?>>Vijapur</option>
									<option <?php if($data['city']=='Visnagar') { ?> selected <?php } ?>>Visnagar</option>
								</select>

							</div>	
					</div>


					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Mobile :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" name="mobile" id="mobile"  title="Mobile" value="<?php echo $data['mobile']; ?>" size="22" tabindex="1" required="" aria-required='true' onblur="return mobile_fun();" />
							</div>
					</div>


					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Birth Date :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="date" class="form-with-icon" name="birth_date" id="birth_date" title="Birth_Date" value="<?php echo $data['birth_date']; ?>" size="22" tabindex="1" aria-required='true' required="" />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Age :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="age" id="age" class="form-with-icon"  title="Age" value="<?php echo $data['age']; ?>" required="" size="22" tabindex="2" aria-required='true' onblur="return age_fun();" /><br><br>
							</div>
					</div>


				
					<div class="col-sm-8">
							<div class="form-group">
									<label style="margin-right: 200px; margin-bottom: 5px;"><b>Gender :</b></label>
									<label style="margin-right: 200px;">
						                <input type="radio"  name="gender" id="optionsRadios1" value="Male" <?php if($data['gender'] == 'Male') { ?> checked="checked" <?php } ?>>
						                Male
						              </label>
						              <label>
						                <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php if($data['gender'] == 'Female') { ?> checked="checked" <?php } ?>>
						                Female
						              </label>
							</div>
					</div>
					
				</td>
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<button id="submit" name="submit" class="button yellow" >Submit</button>

				</td>
				</tr>

				</table>
				</form>



		<?php
		}
		else
		{
			?>
			


		<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>
	 
		<?php 
			include "../include/config.php"; 
			$u_id = $_SESSION['userId'];
			$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id'";
			$query = $con->query($sql);
			while($data = $query->fetch(PDO::FETCH_ASSOC))
			{

			?>

			<form class="form-horizontal" action="index.php?page=profile" method="post" enctype="multipart/form-data">

				<table>

				<tr>
				<td style="height: 50%;width: 50%;">
					<img src="photo/<?php echo $data['photo']; ?>" style="height:500px;width:500px;" />
					<td>

					<div class="col-sm-6">
							
							<label  for="user_login"><b>Aadhar No :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['aadhar_no']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label  for="user_login"><b>Full Name :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['name']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>



					<div class="col-sm-6">
							
							<label for="user_login"><b>UserName :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['uname']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>
					
					<div class="col-sm-6">
							
							<label for="user_login"><b>Password</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['password']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					
					<div class="col-sm-8">
							
							<label for="user_login"><b>Email_Id :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['email']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label for="user_login"><b>Address :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<textarea placeholder="Address ..* " id="address" name="address" class="form-with-icon" title="Address" rows="3" tabindex="2" required="" aria-required='true'><?php echo $data['address'];?></textarea> 
							</div>
					</div>

					<div class="col-sm-6">
							<br><br>
							<label for="user_login"><b>Pincode :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['pincode']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>


					<div class="col-sm-8">
							
							<label for="user_login"><b>City :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['city']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					
					<div class="col-sm-6">
							
							<label for="user_login"><b>Birth_Date :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['birth_date']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label for="user_login"><b>Age :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['age']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label for="user_login"><b>Mobile :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['mobile']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label for="user_login"><b>Gender :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['gender']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					
				</td>
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<button id="submit" name="submit" class="button yellow" >Update</button>

				</td>
				</tr>

				</table>
				</form>

					
				
			
			<?php
			}
			?>
			
		</div>
		<?php
		}
		?>
		</div>
	</div>
		    	
	</div>
	</div>
	</div>
</section>
    
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-includes/js/comment-reply.min.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/premiumlayers.net\/demo\/wp\/drivepro\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/plugins/themeplaza-slider/assets/js/jquery.fitvid.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/plugins/themeplaza-slider/assets/js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/themes/drivepro/js/plugins.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/themes/drivepro/js/scripts.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/themes/drivepro/js/jquery.inview.min.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-content/themes/drivepro/js/nivo-lightbox.min.js'></script>
<script type='text/javascript' src='http://premiumlayers.net/demo/wp/drivepro/2015/04/28/flowers/wp-includes/js/wp-embed.min.js'></script>
</body>
</html>