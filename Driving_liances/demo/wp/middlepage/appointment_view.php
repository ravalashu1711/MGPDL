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
View Appointment Here 
</h3>	
</div>
</div>
<section id="blogs" class="section white">
<div class="inner">
<div class="container">

<div class="blog-post-post-comment">
<h5>View Appointment</h5>

<?php
if($_GET['ap_type'] == 'New License')
{
	?>
	<center>
	
	<a style="font-size: 20px; color: blue;" href="index.php?page=test_login">Go For Test</a>

	<br><br>

	<br><label name="msg" id="msg" style="width:1000px; font-size: 20px; " ><b><u>New License Appointment</u></b></label><br><br>

	 <label name="msg" id="msg" style="width:1000px; font-size: 20px; " >Plz Take Special Note About Appointment No and Appointment Date</label>
	 <br><br>
	 </center>

<?php
}
else
{
	?>
	<center>
		<br><label name="msg" id="msg" style="width:1000px; font-size: 20px; " ><b><u>Renew License Appointment</u></b></label><br><br>
	</center>

	<center>
		<br><label name="msg" id="msg" style="width:1000px; font-size: 20px; " ><b><u>Sry , We Are Not Authorized To Renew License But We Will Help You To Save Time </u></b></label><br><br>
	</center>


	<center>
		<br><label name="msg" id="msg" style="width:1000px; font-size: 20px; " ><b><u>Go To Mahesana RTO Shown This Form And U Will Quickly Renew Your License</u></b></label><br><br>
	</center>



	<?php
}
?>
<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>

		 





<?php 
include "../include/config.php"; 
$ap_id = $_GET['ap_id'];
$sql = "SELECT * FROM `appointment` WHERE `ap_id`='$ap_id'";
$query = $con->query($sql);
while($data = $query->fetch(PDO::FETCH_ASSOC))
{

?>


	


				<div class="row">

					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Appointment No :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									
									<input type="text" class="form-with-icon" value="<?php echo $data['ap_id']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
					<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>User_Id :</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-envelope"></i></span>
									
									<input type="text" class="form-with-icon" value="<?php echo $data['u_id']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Name Of Candidate:</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['name']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Appointment Date:</b></label>
							<div class="form-group">
									<span class="form-icon"><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['ap_date']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>

					<div class="col-sm-8">
							
							<label style="margin-left: 50px; margin-bottom: 10px;" for="user_login"><b>Appointment T ype:</b></label>
							<div class="form-group">
									<span class="form-icon" ><i class="fa fa-comment"></i></span>
									<input type="text" class="form-with-icon" value="<?php echo $data['ap_type']; ?>" size="22" tabindex="1" aria-required='true' readonly />
							</div>
					</div>
					
					

</div>


</table>
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