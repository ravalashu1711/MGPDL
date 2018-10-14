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
					Learner License
				</h3>	
			</div>
			 </div>
	<section id="blogs" class="section white">
	<div class="inner">
		<div class="container">
			
	<div class="blog-post-post-comment">
		<h5>Lerner License Print</h5>
		<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>
		<center><br><br><h5>Take Print Of This And Go To Mahesana RTO For Driving Test</h5><br></center>

		 <?php 
			include "../include/config.php";
			$u_id = $_SESSION['userId'];
			$sql = "SELECT * FROM `user_reg` WHERE `u_id`='$u_id' ";
			$query = $con->query($sql);
			while($data = $query->fetch(PDO::FETCH_ASSOC))

			{

			?>

	 
		 <table style="border: none;">

		 <tr>
		 <td>

		 <label style="margin-left: 200px;margin-bottom: 10px;" for="user_login"><b>Form </b></label>


		 
		 <td>

		 		<img src="pdf/logo.jpg" style="margin-left: 200px;height:50px;width:50px;"/><br><br>

		 

		 <td>

		 <label style="margin-left: 50px;margin-bottom: 10px;" for="user_login"><b>See Rule 3(A)13</b></label>


		 

		 <td rowspan="3">
		 <img src="photo/<?php echo $data['photo']; ?>"  style="height:100px;width:100px;"/>
		 	
		 </td>
		 </td>
		 </td>
		 </td>


		 </tr>
		 

		 <tr>
		 <td>LL NO :</td>
		 <td colspan="2"><?php echo $data['u_id']; ?></td>
		 </tr>

		 <tr>
		 <td>COV :</td>
		 <td colspan="2">MCWG,LMV</td>
		 </tr>

		 <tr>
		 <td>Valid_From :</td>
		 <td>  <?php echo $_GET['ap_date']; ?></td>

		 <td> TO : </td>
		 <td>2017-9-21 </td>
		
		 </tr>

		 <tr>
		 <td>
		 Name:
		 </td>
		 <td colspan="3">
		 <?php echo $data['name']; ?>
		 </td>
		 </tr>

		 <tr>
		 <td>
		 Date_Of_Birth:
		 </td>
		 <td>
		 <?php echo $data['birth_date']; ?>
		 </td>

		 <td>
		 Blood_Group:
		 </td>
		 <td>
		 A+
		 </td>

		 </tr>

		 <tr>
		 <td colspan="2">
		 Address :
		 
		 <?php echo $data['address']; ?> <br>City : <?php echo $data['city']; ?>
		 </td>
		 <td colspan="2">
		 	Pincode : <?php echo $data['pincode']; ?>
		 	</td>
		 </tr>


		 <tr>
		 <td colspan="2"></td>
		 <td colspan="2"> License Authority  :</td>
		 </tr>

		 <?php
		}
		?>

		 </table>

				


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