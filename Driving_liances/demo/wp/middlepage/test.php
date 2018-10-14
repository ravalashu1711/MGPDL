<?php
include "../include/config.php";
error_reporting(0);


$sql = "SELECT * FROM `test` WHERE `status`='Active'";
$query = $con->query($sql);

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
Test Here
</h3> 
</div>
</div>
<section id="blogs" class="section white">
<div class="inner">
<div class="container">

<div class="blog-post-post-comment">
<h5>Theory Test</h5> 
<h5 style="margin-left: 900px;">Date : <?php echo $_GET['ap_date'] ; ?></h5> 
<div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="flowers.html#respond" style="display:none;">Click here to cancel reply.</a></div>


<br><br>

<center>
      <h5>Question List :</h5>

        <h4>Time : 30 Minute</h4>



      <form action="index.php?page=t_attemt" method="post" enctype="multipart/form-data" onsubmit="">
      <table style="height: 700px;width: 700px;">
      <?php 
        $i=1;
        while($data = $query->fetch(PDO::FETCH_ASSOC))
        {
      ?>
          <tr>
            <th rowspan="3" valign="top"="top">Que:<?php echo $i++;?></th>
            <th colspan="2" align="left">
              <label><?php echo $data['question']; ?></label>
              <br><br>
            </th>
            </tr>

            <tr>
                  <?php
                    if(isset($data['ans1']))
                    {
                  ?>
                  <td>
                    <label>A.</label>
                    <input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="1" />
                    <label for=""><?php echo $data['ans1'] ?></label>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  </td>
                  <?php
                    }
                  ?>
              
              
                  <?php
                    if(isset($data['ans2']))
                    {
                  ?>
                  <td>
                    <label>B.</label>
                    <input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="2"/>
                    <label for=""><?php echo $data['ans2'] ?></label>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  </td>
                  <?php
                    }
                  ?>
              
            </tr>

            <tr>
                  <?php
                    if(isset($data['ans3']))
                    {
                  ?>
                  <td>
                    <label>C.</label>
                    <input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="3"/>
                    <label for=""><?php echo $data['ans3'] ?></label>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                  </td>
                  <?php
                    }
                  ?>
                  
                  <?php
                    if(isset($data['ans4']))
                    {
                  ?>
                  <td>
                    <label>D.</label>
                    <input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="4"/>
                    <label for=""><?php echo $data['ans4'] ?></label>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                </td>

                  <?php
                    }
                  ?>
            </tr>
                    
              <input type="radio" checked="checked" style="display:none;" name="<?php echo $data['t_id']; ?>" value="No_Attemp" />
           
         
            <?php
            }
            ?>

            <input type="hidden" name="ap_date" id="ap_date" value="<?php echo $_GET['ap_date']; ?>" />
          <tr>
            <td colspan="3"><center><button type="submit">Submit</button></center></td>
          </tr>
      </table>
      </form>
      </center>
    



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