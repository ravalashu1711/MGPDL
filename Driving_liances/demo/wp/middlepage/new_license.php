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
					New License
				</h3>	
			</div>
			 </div>
	<section id="blogs" class="section white">
	<div class="inner">
		<div class="container">
			
	<div class="blog-post-post-comment">
		<h5>Lerner License Form</h5>
		<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>
	 	
	 	<?php 
			include "../include/config.php"; 
			$u_id = $_SESSION['userId'];
			$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id'";
			$query = $con->query($sql);
			while($data = $query->fetch(PDO::FETCH_ASSOC))
			{

			?>

		 
			<form action="middlepage/new_license_action.php" method="post" enctype="multipart/form-data">
				<div class="row">

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Upload Document:</b></label>
							<div class="form-group">
									
									<input type="file" class="form-with-icon" name="document" id="document" title="Document" value="" size="22" tabindex="1" aria-required='true' required="" />
							</div>
					</div>


					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>License Category :</b></label>
							<div class="form-group">
								
								<select id="lic_cat" name="lic_cat" required="">
							 		<option>----------------------------------------------------------- Select Category --------------------------------------------------------------------</option>
					                <option value="Motorcycle 50cc">Motorcycle 50cc</option>
									<option value="Motorcycle more than 50cc">Motorcycle more than 50cc</option>
					                <option value="FVG-Motorcycles">FVG-Motorcycles</option>
					                <option value="Motorcycle With Gear ">Motorcycle With Gear</option>
									<option value="Light Motor Vehicle">Light Motor Vehicle</option>
									<option value="Light Motor Vehicle-Non Transport">Light Motor Vehicle-Non Transport</option>
									<option value="Light Motor Vehicle-Transport">Light Motor Vehicle-Transport</option>
									<option value="Heavy Motor Vehicle">Heavy Motor Vehicle</option>
									<option value="Heavy Passenger Motor Vehicle">Heavy Passenger Motor Vehicle</option>
									<option value="Trans">Transport For All</option>
									<option value="TRAILOR">TRAILOR</option>
								</select>
							</div>	
					</div>

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Candidate Name :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-with-icon" name="name" id="name" title="Name" value="<?php echo $data['name'];?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Email_Id :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="text" name="email" id="email" class="form-with-icon" title="Email" value="<?php echo $data['email'];?>" size="22"  tabindex="2" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Address</b></label>
							<div class="form-group">
								<span class="form-icon"><i class="fa fa-comment"></i></span>
								<textarea name="address" class="form-with-icon" title="address" id="address" rows="5" readonly><?php echo $data['address'];?></textarea>
							</div>	
					</div>
					
					<div class="col-sm-6">
							<div class="form-group">
									<br><br>
									<br><br><br>
									<input type="text" class="form-with-icon" name="pincode" id="pincode" title="Pincode" value="<?php echo $data['pincode'];?>" size="22" tabindex="1" aria-required='true' readonly />

							</div>
					</div>

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>City :</b></label>
							<div class="form-group">
								<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="city" id="city" class="form-with-icon" title="City" value="<?php echo $data['city'];?>" size="22" tabindex="2" aria-required='true' readonly="" />
							</div>	
					</div>


					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>State :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="state" id="state" class="form-with-icon" title="State" value="Gujarat" size="22" tabindex="2" aria-required='true' readonly="" />
							</div>
					</div>


					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Country :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="country" id="country" class="form-with-icon" title="country" value="India" size="22" tabindex="2" aria-required='true' readonly="" />
							</div>
					</div>


					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Mobile :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" name="mobile" id="mobile" title="Mobile" value="<?php echo $data['mobile'];?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Birth_Date:</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="date" class="form-with-icon" name="birth_date" id="birth_date" title="Birth_Date" value="<?php echo $data['birth_date'];?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Place Of Birth:</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="place_of_birth" id="place_of_birth" class="form-with-icon" title="place_of_birth" value="" size="22" tabindex="2" aria-required='true' required="" />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Age :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="age" id="age" class="form-with-icon" title="Age" value="<?php echo $data['age'];?>" size="22" tabindex="2" aria-required='true' readonly />
							</div>
					</div>


					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Blood Group :</b></label>
							<div class="form-group">
							
								<select id="select01" name="b_group" required="">
					                <option value="None">----------------------------------- Select Blood-Group ---------------------------------------</option>
					                <option value="A+">A+</option>
					                <option value="A-">A-</option>
					                <option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								  </select>
							</div>	
					</div>

					<div class="col-sm-8">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Education :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" name="education" id="education" class="form-with-icon" title="education" value="" size="22" tabindex="2" aria-required='true' required="" />
							</div>
					</div>

					

					<div class="col-sm-12">
						
						<input type="submit" class="button yellow"  value="submit" name="submit">
						<input type='hidden' name='nl_id' id='nl_id' />
						
					</div>
				</div>
			</form>

		<?php
		}
		?>

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