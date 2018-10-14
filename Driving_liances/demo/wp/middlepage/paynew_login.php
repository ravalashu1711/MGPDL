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
Payment Here
</h3>	
</div>
</div>
<section id="blogs" class="section white">
<div class="inner">
<div class="container">

<div class="blog-post-post-comment">
<h5>New License Payment</h5>
<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>


<form action="index.php?page=paynew_login_action" method="post" enctype="multipart/form-data">

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

					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Registration No :</b></label>
							<div class="form-group">
									
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" name="nl_id" id="nl_id" placeholder="Enter Registration No  ..*" title="Reg_No" value="" size="22" tabindex="1" aria-required='true' onblur="return uuname_fun();" />
							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Birth Date:</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="date" class="form-with-icon" name="birth_date" id="birth_date" placeholder="Birth_Date *" title="Birth_Date" value="" size="22" tabindex="1" aria-required='true' required="" />
							</div>
					</div>
					
					<div class="col-sm-8">
						
						<input type="submit" class="button yellow"  value="submit" name="submit">
						
						
					</div>

					

</div>


</table>
</form>

	
	<form action="index.php?page=paypal" method="post"> <?php // remove sandbox=1 for live transactions ?>
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
    <input type="hidden" name="currency_code" value="INR" />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" />
    <input type="hidden" name="product_id" value="<?php echo $model; ?>" /> <input type="hidden" name="product_name" value="<?php echo $product_name; ?>" /> 
	<input type="hidden" name="product_quantity" value="1" />
	<input type="hidden" name="product_amount" value="<?php echo $total; ?>" />
	<input type="hidden" name="payer_fname" value="<?php  echo $checkout['name'];  ?>" />
 	<input type="hidden" name="payer_email" value="<?php  echo $checkout['email'];  ?>" />
		<input type="hidden" name="payer_address" value="<?php  echo $checkout['address'];  ?>" />
 
	<input type="submit" name="submit" value="Pay now using Paypal" /> 
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