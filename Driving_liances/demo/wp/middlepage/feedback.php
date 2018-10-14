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
					Feedback
				</h3>	
			</div>
			 </div>
	<section id="blogs" class="section white">
	<div class="inner">
		<div class="container">
			
	<div class="blog-post-post-comment">
		<h5>Feedback</h5>
		<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>
	 
	 	<?php 
			include "../include/config.php"; 
			$u_id = $_SESSION['userId'];
			$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id'";
			$query = $con->query($sql);
			while($data = $query->fetch(PDO::FETCH_ASSOC))
			{

			?>
		 
			<form action="middlepage/feedback_action.php" method="post" enctype="multipart/form-data">

			<?php 
					if($_GET['msg'] == true)
					{
						?>
						<label name="msg" id="msg" style="width:1000px; font-size: 20px; " ><?php echo $_GET['msg']; ?></label>
						<br><br><br>
						<?php
					}
				?>

				<div class="row">
					<div class="col-sm-6">
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-with-icon" name="name" id="name" placeholder="name *" title="Name" value="<?php echo $data['name'];?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>
					<div class="col-sm-6">
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									<input type="text" name="email" id="email" class="form-with-icon" placeholder="Email *" title="Email" value="<?php echo $data['uname'];?>" size="22" tabindex="2" aria-required='true' readonly />
							</div>
					</div>


						<div class="col-sm-12">
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" name="subject" id="subject" placeholder="Subject *" title="subject" value="" size="22" tabindex="1" aria-required='true' />
							</div>
					</div>
					

					<div class="col-sm-12">
						<div class="form-group">
							<span class="form-icon"><i class="fa fa-comment"></i></span>
							<textarea name="message" class="form-with-icon" title="message" placeholder="Message" id="message" rows="7"></textarea>
						</div>
						<input type="submit" class="button yellow"  value="submit" name="submit">
						<input type='hidden' name='fd_id' id='fd_id' />
						
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