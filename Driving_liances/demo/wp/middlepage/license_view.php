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
View License Here 
</h3>	
</div>
</div>
<section id="blogs" class="section white">
<div class="inner">
<div class="container">


<?php
if($_GET['nl_id'] == true)
{
	?>
	<div class="blog-post-post-comment">
	<h5>View New License</h5>


	<a style="margin-left: 500px; font-size: 20px; color: blue;" href="index.php?page=paynew_login">Go For Payment</a>

	<br><br>
	 <label name="msg" id="msg" style="width:1000px; font-size: 20px; " >Plz Take Special Note About Registration No </label>
	 <br><br>

	 <?php 
		include "../include/config.php";
		$nl_id = $_GET['nl_id'];
		$sql = "SELECT * FROM `new_license` WHERE `nl_id`='$nl_id' ";
		$query = $con->query($sql);
		while($data = $query->fetch(PDO::FETCH_ASSOC))

		{

		?>

		<div class="row">

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Document :</b></label>
							<div class="form-group">
									
									
									<img src="upload/<?php echo $data['document']; ?>" style="height:200px;width:200px;" class="form-with-icon"  size="22" tabindex="1" aria-required='true' readonly/>
							</div>
					</div>

					
					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Registration No :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									
									<input type="text" class="form-with-icon" value="<?php echo $data['nl_id']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Full Name :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['name']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Email_Id:</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['email']; ?>"" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Address :</b></label>
							<div class="form-group">
								<span class="form-icon"><i class="fa fa-comment"></i></span>
								<textarea rows="4" class="form-with-icon" value=""><?php echo $data['address']; ?></textarea>
							</div>	
					</div>

					

					<div class="col-sm-6">
							<div class="form-group">
									<br><br>
									<br><br>
									<input type="text" class="form-with-icon"  value="<?php echo $data['pincode']; ?>" size="22" tabindex="1" aria-required='true' />

							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>City :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['city']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

			


					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>State :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['state']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>



					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Country :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['country']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Mobile :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['mobile']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>


					

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Birth_Date :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['birth_date']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Place Of Birth :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['place_of_birth']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Age :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['age']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>


					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Blood Group :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['b_group']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Education :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['education']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<?php
					}
					?>


<?php
}
else
{
	?>
	<div class="blog-post-post-comment">
	<h5>View ReNew License</h5>


	<a style="margin-left: 500px; font-size: 20px; color: blue;" href="index.php?page=payrenew_login">Go For Payment</a>

	<br><br>
	 <label name="msg" id="msg" style="width:1000px; font-size: 20px; " >Plz Take Special Note About Renew License Id </label>
	 <br><br>


	 <?php 
		include "../include/config.php";
		$rl_id = $_GET['rl_id'];
		$sql = "SELECT * FROM `renew_license` WHERE `rl_id`='$rl_id' ";
		$query = $con->query($sql);
		while($data = $query->fetch(PDO::FETCH_ASSOC))

		{

		?>

		<div class="row">

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Document :</b></label>
							<div class="form-group">
									
									
									<img src="upload/<?php echo $data['document']; ?>" style="height:200px;width:200px;" class="form-with-icon"  size="22" tabindex="1" aria-required='true' readonly/>
							</div>
					</div>

					
					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Registration No :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									
									<input type="text" class="form-with-icon" value="<?php echo $data['rl_id']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Full Name :</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['name']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Email_Id:</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['email']; ?>"" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
						<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Address :</b></label>
							<div class="form-group">
								<span class="form-icon"><i class="fa fa-comment"></i></span>
								<textarea rows="4" class="form-with-icon" value=""><?php echo $data['address']; ?></textarea>
							</div>	
					</div>

					

					<div class="col-sm-6">
							<div class="form-group">
									<br><br>
									<br><br>
									<input type="text" class="form-with-icon"  value="<?php echo $data['pincode']; ?>" size="22" tabindex="1" aria-required='true' />

							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>City :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['city']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

			


					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>State :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['state']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>



					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Country :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['country']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Mobile :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['mobile']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>


					

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Birth_Date :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['birth_date']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Place Of Birth :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['place_of_birth']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Age :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['age']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>


					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Blood Group :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['b_group']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-6">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Education :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['education']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<?php
					}
					?>

	 


	<?php
}
?>
<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>

		 







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