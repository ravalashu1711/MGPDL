<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Slider Navigation Styles - Slide In</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="slider/css/normalize.css" />
	<link rel="stylesheet" href="slider/css/flexslider.css" />
	<link rel="stylesheet" href="slider/css/demo.css" />
	<style type="text/css">		
	
		/* general style */
		.preview {
			width: 360px;
			height:90px;
			position: absolute;
			top:0;
			left:-90px;
			z-index:100;
			-webkit-transition:  all 0.3s ease-out; 
			-moz-transition:  all 0.3s ease-out; 
			transition:  all 0.3s ease-out; 	
			opacity:0;
		}
		
		.preview img {
			position: absolute;
			left:90px;
			top:0;
			width: 90px;
		}
		
		.preview .alt {
			position: absolute;
			left:180px;
			top:0;
			background: #fff;
			width: 180px;
			height:90px;
			color:#000;
			text-indent:0;
			text-transform: uppercase;
			text-align:center;
			font-size:16px;
			line-height:90px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
		}
		
		
		/* next button */			
		.flex-next .preview {
			right:-50px;
			left:auto;	
		}
		
		.flex-next .preview img {
			position: absolute;
			left:180px;
			top:0;
			width: 90px;
		}
		
		.flex-next .preview .alt {
			left:0;
		}
		
		
		/* hover style */		
		.flex-prev:hover .preview {
			left:0;
			opacity:1;
		}
		
		.flex-next:hover .preview {
			right:0;
			opacity:1;
		}		
	</style>
</head>
<body>
	<div id="hero">	
		<div class="flexslider">
		  <ul class="slides">
		    	<li>
					<img src="slider/img/full/banner-5.jpg" alt="Wood Pattern" data-thumbnail="slider/img/thumbnail/banner-5.jpg" />	
				</li>
			</ul>
		</div>		
	</div>		
</body>
<script src="slider/js/jquery.js"></script>
<script type="text/javascript" src="http://www.queness.com/js/bsa2.js"></script>
<script src="slider/js/jquery.flexslider-min.js"></script>
<script src="slider/js/demo.js"></script>
</html>