<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
	$u_id = $_GET['u_id'];
	$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id'";
	$query = $con->query($sql);
	$data = $query->fetch(PDO::FETCH_ASSOC);
?>

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
					Registration Here
				</h3>	
			</div>
			 </div>
	<section id="blogs" class="section white">
	<div class="inner">
		<div class="container">
			
	<div class="blog-post-post-comment">
		<h5>Registration Form</h5>
		<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>
	 
		 
			<form action="middlepage/reg_action.php" method="post" enctype="multipart/form-data">
				<div class="row">
					
				<div class="col-sm-8">
						<input type="hidden" name="u_id" id="u_id" />
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Upload Photo :</b></label>
							<div class="form-group">
									
									<input type="file" class="form-with-icon" name="photo" id="photo" title="photo" value="" size="22" tabindex="1" aria-required='true' required="" />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Aadharcard No :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-with-icon" name="aadhar_no" id="aadhar_no" placeholder="Aadharcard No ..*" title="aadhar_no" value="<?php echo $data['aadhar_no']; ?>" size="22" tabindex="1" aria-required='true' required="" />
							</div>
					</div>


					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Name :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-with-icon" name="name" id="name" placeholder="Full Name ..*" title="Name" value="" size="22" tabindex="1" aria-required='true' required="" onblur="return name_fun();" />
							</div>
					</div>

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Username :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" name="uname" id="uname" placeholder="Uername ..*" title="Uname" value="" size="22" required="" tabindex="1" aria-required='true' onblur="return uname_fun();" />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Password :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-with-icon" name="password" id="password" placeholder="Password ..*" title="password" value="" size="22" required="" tabindex="1" aria-required='true' onblur="document.getElementById('con_password').value=document.getElementById('password').value"/>
									
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Confirm Password :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-with-icon" name="con_password" id="con_password" placeholder="Confirm Password ..*" title="con_password" value="" size="22" tabindex="1" aria-required='true' required="" onblur="return confirmpass_fun();"/>
									
							</div>
					</div>
					
					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Email_Id :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" name="email" id="email" placeholder="E_Mail ..*" title="Email" value="" size="22" required="" tabindex="1" aria-required='true' onblur="return email_fun();" />
							</div>
					</div>
					

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Address :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<textarea placeholder="Address ..* " id="address" name="address" class="form-with-icon" title="Address" rows="3" tabindex="2" required="" aria-required='true' onblur="return address_fun();"></textarea> 
							</div>
					</div>	

					<div class="col-sm-6">
							<div class="form-group">
									<br><br>
									<br><br>
									<input type="text" class="form-with-icon" name="pincode" id="pincode" placeholder="Pincode ..*" title="Pincode" value="" size="22" tabindex="1" aria-required='true' onblur="return pincode_fun();" />

							</div>
					</div>	


					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>City :</b></label>
							<div class="form-group">
								
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


					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Mobile :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" name="mobile" id="mobile" placeholder="Mobile No *" title="Mobile" value="" size="22" tabindex="1" required="" aria-required='true' onblur="return mobile_fun();" />
							</div>
					</div>


					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Birth Date :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="date" class="form-with-icon" name="birth_date" id="birth_date" placeholder="Birth_Date *" title="Birth_Date" value="" size="22" tabindex="1" aria-required='true' required="" />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Age :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="age" id="age" class="form-with-icon" placeholder="Age *" title="Age" value="" required="" size="22" tabindex="2" aria-required='true' onblur="return age_fun();" /><br><br>
							</div>
					</div>


				
					<div class="col-sm-8">
							<div class="form-group">
									<label style="margin-right: 200px; margin-bottom: 5px;"><b>Gender :</b></label>
									<label style="margin-right: 200px;">
						                <input type="radio"  name="gender" id="optionsRadios1" value="Male">
						                Male
						              </label>
						              <label>
						                <input type="radio" name="gender" id="optionsRadios2" value="Female" >
						                Female
						              </label>
							</div>
					</div>
					
					
					<div class="col-sm-12">
						
						<input type="submit" class="button yellow"  value="submit" name="submit">
						
						
					</div>
				</div>
			</form>



			</div>
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