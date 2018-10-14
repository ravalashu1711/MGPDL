<?php
error_reporting(0);
include "../include/config.php";
//print_r($_POST);
$answer = $_POST;
$ans_implod = implode("",$answer);
//echo $ans_implod;
$right = 0;
$wrong = 0;
$no_answer = 0;


$sql = "SELECT t_id,answer FROM test";
$query = $con->query($sql);
while($data = $query->fetch($query))
{
	if($data['answer']==$_POST[$data['t_id']])
	{
		$right++;
	}
	else if($_POST[$data['t_id']] == "No_Attemp")
	{
		$no_answer++;
	}
	else
	{
		$wrong++;
	}
}
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
Result Here
</h3> 
</div>
</div>
<section id="blogs" class="section white">
<div class="inner">
<div class="container">

<div class="blog-post-post-comment">
<h5>Test Result</h5>
<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>


<br><br>



<?php
	
	
if( $right >= 1)
{
		
		 
	?>
	<center>

	<h5 style="margin-left: 900px;">Date : <?php echo $_POST['ap_date'] ; ?></h5> 
	
	 <label name="msg" id="msg" style="width:1000px; font-size: 20px; " >Congratulation <?php echo $_SESSION['name']; ?> , You Have Benn SuccessFully Passed Theory Exam </label>
	 

	 <br><br>
	 <label name="msg" id="msg" style="width:1000px; font-size: 20px; " >You Are Eligible To Get Your Learner License </label>
	 <br><br>



	 <a style="font-size: 20px; color: blue;" href="index.php?page=lerner_license_view&ap_date=<?php echo $_POST['ap_date']; ?>">Go For Lerner License</a>

	<br><br>
	</center>
	 <?php
}
else
{
?>
	<center>

	<label name="msg" id="msg" style="width:1000px; font-size: 20px; " >Sry <?php echo $_SESSION['name']; ?> , You Are Not Passed Theory Exam </label>
	 

	 <br><br>
	 <label name="msg" id="msg" style="width:1000px; font-size: 20px; " >You Are Not Eligible To Get Your Learner License </label>
	 <br><br>

	 <a style="font-size: 20px; color: blue;" href="index.php?page=test_login">Go For Return Test</a>

	<br><br>
	</center>





<?php
}
?>
<center>
		<br><br>		
		<h1>Final Result</h1>
		<br>
		<table style="height: 500px;width: 500px;" border="1px">
			<tr>
				<th style='text-align:center;'><h>Total No of Question:</h3></th>
				<td><h3><?php echo count($_POST); ?></h3></td>
			</tr>
			<tr>
				<th style='color:green;text-align:center;'>Wright Attempted Answer:</th>
				<td><?php echo $right ; ?></td>
			</tr>
			<tr>
				<th style='color:#FFCC00;text-align:center;'>Not Attempted Answer:</th>
				<td><?php echo $no_answer ; ?></td>
			</tr>
			<tr>
				<th style='color:#cc0000;text-align:center;'>Wrong Attempted Answer:</th>
				<td><?php echo $wrong ; ?></td>
			</tr>
		</table>
	 <center>
<?php	 
// echo count($_POST);
// echo count($_POST['q_id'])
// echo "Right:".$right."<br>";
// echo "".$no_answer."<br>";
// echo "Wrong:".$wrong."<br>";
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