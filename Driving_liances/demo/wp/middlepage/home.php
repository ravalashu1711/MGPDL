<?php
if($_SESSION['userId'] == '')
{
?>


<!--Stsrt Slider-->
<div class="row">

<div class="col-md-12">
<div id="main-slide" class="flexslider flexslider-heading headcarousel homeslider page-slider-wrapper slide" data-ride="carousel">

<?php
	include "slider/slider.php";
	?>
</div></div>
<!--End Slider-->

<div class="clearfix  "  style="margin-bottom:10px !important; clear:both;"></div>
<div class="fullsize parallax-bg">
<div class="parallax-wrapper parallax-background " data-stellar-background-ratio="0.6" style=" background-image:url(http://premiumlayers.net/demo/wp/drivepro/wp-content/uploads/2015/04/background02.jpg) !important; background-repeat:repeat !important;">
<div style=" background-color: rgba(0,43,94, 0.9) !important;">
<div class="container">
<div class="parallax-wrapper-inner "  style="" id="7230"><div class="clearfix  "  style="margin-bottom:72px !important; clear:both;"></div><div class="sectionTitles heading text-center  " style="margin-top: px;">
<h3 class="sectionTitle " style="color:#ffffff;font-size: px;">Trusted By Thousands</h3><hr class="line" style="border-color:#ffffff !important"><span class="sectionSubTitle " style="color:#ffffff !important">Satisfied Customer Feedback</span>
</div><div class="row"><div class="col-sm-6 " style="border: #ffdd00;padding: px;"><div class="team-shortcode testimonial clearfix   ">
<div class="testimonial-image">
<div class="inner"><img alt="Jerry" src="drivepro/wp-content/uploads/2015/04/comment01.jpg"></div>
</div>.
<div class="testimonial-body">
<span class="quote-icon"><i class="fa fa-quote-right"></i></span>
<h5 style="color:#222222 ;">Jerry Wilson</h5>
<p style="color:#222222 ;">Lorem ipsum Consequat ut dolor Duis ut minim eiusmod reprehenderit proident. Lorem ipsum Duis ut sunt nisi fugiat incididunt Duis ea adipisicing dolor nulla sint et.</p></div>
</div></div><div class="col-sm-6 " style="border: #ffdd00;padding: px;"><div class="team-shortcode testimonial clearfix   ">
<div class="testimonial-image">
<div class="inner"><img alt="Katrin" src="drivepro/wp-content/uploads/2015/04/testimonial02.jpg"></div>
</div>.
<div class="testimonial-body">
<span class="quote-icon"><i class="fa fa-quote-right"></i></span>
<h5 style="color:#222222 ;">Katrin Jim</h5>
<p style="color:#222222 ;">Lorem ipsum Consequat ut dolor Duis ut minim eiusmod reprehenderit proident. Lorem ipsum Duis ut sunt nisi fugiat incididunt Duis ea adipisicing dolor nulla sint et.</p></div>
</div></div></div><div class="row"><div class="col-sm-6 " style="border: #ffdd00;padding: px;"><div class="team-shortcode testimonial clearfix   ">
<div class="testimonial-image">
<div class="inner"><img alt="Dwayne" src="drivepro/wp-content/uploads/2015/04/testimonial03.jpg"></div>
</div>.
<div class="testimonial-body">
<span class="quote-icon"><i class="fa fa-quote-right"></i></span>
<h5 style="color:#222222 ;">Dwayne Johnson</h5>
<p style="color:#222222 ;">Lorem ipsum Consequat ut dolor Duis ut minim eiusmod reprehenderit proident. Lorem ipsum Duis ut sunt nisi fugiat incididunt Duis ea adipisicing dolor nulla sint et.</p></div>
</div></div><div class="col-sm-6 " style="border: #ffdd00;padding: px;"><div class="team-shortcode testimonial clearfix   ">
<div class="testimonial-image">
<div class="inner"><img alt="Chris" src="drivepro/wp-content/uploads/2015/04/testimonial04.jpg"></div>
</div>.
<div class="testimonial-body">
<span class="quote-icon"><i class="fa fa-quote-right"></i></span>
<h5 style="color:#222222 ;">Chris Evans</h5>
<p style="color:#222222 ;">Lorem ipsum Consequat ut dolor Duis ut minim eiusmod reprehenderit proident. Lorem ipsum Duis ut sunt nisi fugiat incididunt Duis ea adipisicing dolor nulla sint et.</p></div>
</div></div></div><div class="clearfix  "  style="margin-bottom:72px !important; clear:both;"></div></div>
</div>
</div>
</div>
</div>


<div class="fullsize parallax-bg">
<div class="parallax-wrapper parallax-background " data-stellar-background-ratio="0.6" style=" background-repeat:repeat !important;">
<div style=" background-color: rgba(251,251,251, 0.9) !important;">
<div class="container">
<div class="parallax-wrapper-inner "  style="" id="50811"><div class="clearfix  "  style="margin-bottom:72px !important; clear:both;"></div><div class="sectionTitles heading text-center  " style="margin-top: px;">
<h3 class="sectionTitle " style="color:;font-size: px;">Any Help?</h3><hr class="line" style="border-color: !important"><span class="sectionSubTitle " style="color: !important">We Have A Special Team To Help Our Customers</span>
</div><div class="col-sm-4 " style="border: #ffdd00;padding: px;"><div class="link clearfix help_block  ">
<div class="content">
<i class="fa fa-file-text"></i>
<span>Apply And Pay Online</span>
</div>
<div class="arrow">
<a href="index.php?page=applypay_info"><i class="fa fa-chevron-right"></i></a>
</div>
</div></div><div class="col-sm-4 " style="border: #ffdd00;padding: px;"><div class="link clearfix help_block  ">
<div class="content">
<i class="fa fa-credit-card"></i>
<span>Appointment And Test</span>
</div>
<div class="arrow">
<a href="index.php?page=apptest_info"><i class="fa fa-chevron-right"></i></a>
</div>
</div></div><div class="col-sm-4 " style="border: #ffdd00;padding: px;"><div class="link clearfix help_block  ">
<div class="content">
<i class="fa fa-question-circle"></i>
<span>Other Things</span>
</div>
<div class="arrow">
<a href="index.php?page=other_info"><i class="fa fa-chevron-right"></i></a>
</div>
</div></div><div class="clearfix  "  style="margin-bottom:72px !important; clear:both;"></div></div>
</div>
</div>
</div>
</div>

</div>




<?php
}
if($_SESSION['userId'] != '')
{
?>





<div class="col-md-12">
<div id="main-slide" class="flexslider flexslider-heading headcarousel homeslider page-slider-wrapper slide" data-ride="carousel">
<ul class="slides slider"   style="height:px !Important">
<li>
<?php
	include "slider/slider.php";
	?>
</li>

<div class="fullsize parallax-bg">
<div class="parallax-wrapper parallax-background " data-stellar-background-ratio="0.6" style=" background-repeat:repeat !important;">
<div style=" background-color: rgba(251,251,251, 0.9) !important;">
<div class="container">
<div class="parallax-wrapper-inner "  style="" id="50811"><div class="clearfix  "  style="margin-bottom:72px !important; clear:both;"></div><div class="sectionTitles heading text-center  " style="margin-top: px;">
<h3 class="sectionTitle " style="color:;font-size: px;">Any Help?</h3><hr class="line" style="border-color: !important"><span class="sectionSubTitle " style="color: !important">We Have A Special Team To Help Our Customers</span>
</div><div class="col-sm-4 " style="border: #ffdd00;padding: px;"><div class="link clearfix help_block  ">
<div class="content">
<i class="fa fa-file-text"></i>
<span>Apply And Pay Online</span>
</div>
<div class="arrow">
<a href="index.php?page=applypay_info"><i class="fa fa-chevron-right"></i></a>
</div>
</div></div><div class="col-sm-4 " style="border: #ffdd00;padding: px;"><div class="link clearfix help_block  ">
<div class="content">
<i class="fa fa-credit-card"></i>
<span>Appointment And Test</span>
</div>
<div class="arrow">
<a href="index.php?page=apptest_info"><i class="fa fa-chevron-right"></i></a>
</div>
</div></div><div class="col-sm-4 " style="border: #ffdd00;padding: px;"><div class="link clearfix help_block  ">
<div class="content">
<i class="fa fa-question-circle"></i>
<span>Other Things</span>
</div>
<div class="arrow">
<a href="index.php?page=other_info"><i class="fa fa-chevron-right"></i></a>
</div>
</div></div><div class="clearfix  "  style="margin-bottom:72px !important; clear:both;"></div></div>
</div>
</div>
</div>
</div>

</div>

<?php
}
?>