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
					Payment
				</h3>	
			</div>
			 </div>
	<section id="blogs" class="section white">
	<div class="inner">
		<div class="container">



	<div class="blog-post-post-comment">
		<h5>Payment Form</h5>
		<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>
	 
		 
			<form action="middlepage/paypal.php" method="post" enctype="multipart/form-data">
				<div class="row">
					
					<?php
					if($_GET['nl_id'] == true)
					{
					?>

					<div class="col-sm-8">
					
							<div class="form-group">
							<label><b>Registration No :</b></label>
								
								<span class="form-icon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-with-icon" name="u_id" id="u_id" title="Reg_No" value="<?php echo $_GET['nl_id']; ?>" size="22" tabindex="1" aria-required='true' readonly />
								
							</div>	
					</div>
					<?php
					}
					else
					{
						?>
					

					<div class="col-sm-8">
					
							<div class="form-group">
							<label><b>Registration No :</b></label>
								
								<span class="form-icon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-with-icon" name="u_id" id="u_id" title="Reg_No" value="<?php echo $_GET['rl_id']; ?>" size="22" tabindex="1" aria-required='true' readonly />
								
							</div>	
					</div>

					<?php
					}
					?>
					<div class="col-sm-8">
							<input type="hidden" id="pay_id" name="pay_id" />
							<div class="form-group">
							<label><b>Name :</b></label>
							<span class="form-icon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-with-icon" name="name" id="name" title="Full Name" value="<?php echo $_GET['name']; ?>" size="22" tabindex="1" aria-required='true' readonly />
								
							</div>	
					</div>

					<div class="col-sm-8">
					
							<div class="form-group">
							<label><b>Payment For :</b></label>
								
								<span class="form-icon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-with-icon" name="pay_type" id="pay_type" title="Pay_Type" value="<?php echo $_GET['pay_type']; ?>" size="22" tabindex="1" aria-required='true' readonly />
								
							</div>	
					</div>

					
					<div class="col-sm-8">
							<div class="form-group">

									<label><b>Amount :</b></label>
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" name="amount" id="amount"  title="Amount" value="250" size="22" tabindex="1" aria-required='true' readonly="" />
							</div>
					</div>
					


					<div class="col-sm-8">
							<div class="form-group">

									<label><b>Payment Using :</b></label>	<br>
							
									<select id="pay_by" name="pay_by" required="">
							 		<option>-------------------------------------------------------- Select ----------------------------------------------------------------</option>
					                <option value="DebitCard">Debit Card</option>
									<option value="CreditCard">Credit Card</option>
					                <option value="SmartCard">Smart Card</option>
					                
								</select>
							</div>
					</div>

					<div class="col-sm-8">
							<div class="form-group">

									<label><b>Card Belongs To Which Bank :</b></label>	<br>
							
									<select id="bank" name="bank" required="">
							 		<option>-------------------------------------------------------- Select ----------------------------------------------------------------</option>
					                <option value="SBI">State Bank Of India (SBI)</option>
									<option value="BOB">Bank Of Baroda</option>
					                <option value="DENA">DENA Bank</option>
					                <option value="INDIAN">Bank Of India</option>
					                <option value="AXIS">AXIS Bank</option>
					                <option value="ICICI">ICICI Bank</option>
								</select>
							</div>
					</div>
					<!-- <form class="paypal" action="/index.php?page=paypal" method="post" id="paypal_form"> -->
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="IN" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <!-- <input type="hidden" name="first_name" value= ?>" /> -->
        <input type="hidden" name="last_name" value="Customer's Last Name" />
        <input type="hidden" name="payer_email" value="<?php echo $_GET['email']; ?>" />
        <!-- <input type="hidden" name="item_number" value="123456" / > -->
        <!-- <input type="submit" name="submit" value="Submit Payment"/> -->
    </form>
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