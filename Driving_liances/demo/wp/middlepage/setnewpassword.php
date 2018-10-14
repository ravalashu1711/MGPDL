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
Set New Password Here
</h3>	
</div>
</div>
<section id="blogs" class="section white">
<div class="inner">
<div class="container">

<div class="blog-post-post-comment">
<h5>New Password Form</h5>
<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>

		 





<form action="index.php?page=setnewpassword_action" method="post" enctype="multipart/form-data">

<table>
<br>

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

						<input type="hidden" name="u_id" id="u_id" value="<?php echo $_GET['u_id']; ?>"/>
					
					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Password : </b></label>
							<div class="form-group">
							
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-with-icon" name="password" id="password" placeholder="Password ..*" title="password" value="" size="22" tabindex="1" aria-required='true' onblur="document.getElementById('con_password').value=document.getElementById('password').value"/>
									
							</div>
					</div>

					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Confirm Password : </b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-with-icon" name="con_password" id="con_password" placeholder="Confirm Password ..*" title="con_password" value="" size="22" tabindex="1" aria-required='true' onblur="return confirmpass_fun();"/>
									
							</div>
					</div>
					
					
					<div class="col-sm-8">
						
						<input type="submit" class="button yellow"  value="submit" name="submit">
						
					</div>

					

</div>


</table></form>



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