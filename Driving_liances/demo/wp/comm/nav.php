<?php
error_reporting(0);
session_start();
$pages = $_REQUEST['page'];
// var_dump($_SESSION);
?>

<?php
if($_SESSION['userId'] != NULL)
{
?>
		
		<!-- Login After open this navigation code end -->
		
		<ul id="menu-main-menu" class="list-unstyled">
		<li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item  menu-item-286 <?php if(basename('index.php') && $pages == '') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'applypay_info') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'apptest_info') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'other_info') {?>active<?php } ?>">
			<a title="Home" href="index.php">
				Home <span></span>
			</a>
		</li>


		<li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-286 dropdown <?php if(basename('index.php') && $pages == 'new_license') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'license_view') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'renew_license_login') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'renew_license') {?>active<?php } ?> ">
			<a title="Services">
				Services <span></span>
			</a>
			<ul role="menu">
				<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-274 <?php if(basename('index.php') && $pages == 'new_license') {?>active<?php } ?>">
					<a title="New License" href="index.php?page=new_license">
					New License<span></span>
					</a>
				</li>
				<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'renew_license_login') {?>active<?php } ?>">
					<a title="Renew License" href="index.php?page=renew_license_login">
					Renew License<span></span>
					</a>
				</li>
			</ul>
		</li>

		<li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-286 dropdown <?php if(basename('index.php') && $pages == 'payment') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'paynew_login') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'payment_view') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'payrenew_login') {?>active<?php } ?>">
			<a title="appointment">
				Payment <span></span>
			</a>
			<ul role="menu">
				<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-274 <?php if(basename('index.php') && $pages == 'new_license_appointment') {?>active<?php } ?>">
					<a title="New License Payment" href="index.php?page=paynew_login">
					New License<span></span>
					</a>
				</li>
				<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'renew_license_appointment') {?>active<?php } ?>">
					<a title="Renew License Appointment" href="index.php?page=payrenew_login">
					Renew License<span></span>
					</a>
				</li>
			</ul>
		</li>


		<li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-286 dropdown <?php if(basename('index.php') && $pages == 'appointment') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'appnew_login') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'appointment_view') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'apprenew_login') {?>active<?php } ?>">
			<a title="appointment">
				Appointment <span></span>
			</a>
			<ul role="menu">
				<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-274 <?php if(basename('index.php') && $pages == 'appnew_login' ) {?>active<?php } ?>">
					<a title="New License Appointment" href="index.php?page=appnew_login">
					New License<span></span>
					</a>
				</li>
				<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'apprenew_login') {?>active<?php } ?>">
					<a title="Renew License Appointment" href="index.php?page=apprenew_login">
					Renew License<span></span>
					</a>
				</li>
			</ul>
		</li>

		

		<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'test') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 't_attemt') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'test_login') {?>active<?php } ?>">
			<a title="Test" href="index.php?page=test_login">
				Test<span></span>
			</a>
		</li>
		
		<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'profile') {?>active<?php } ?>">
			<a title="Profile" href="index.php?page=profile">
				Profile<span></span>
			</a>
		</li>

		<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'feedback') {?>active<?php } ?>">
			<a title="Feedback" href="index.php?page=feedback">
				Feedback<span></span>
			</a>
		</li>
			
		<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288 <?php if(basename('index.php') && $pages == 'logout') {?>active<?php } ?>">
			<a title="Logout" href="index.php?page=logout">
				Logout<span></span>
			</a>
		</li>
			
		</ul>
	
<?php
}
elseif($_SESSION['userId'] == NULL)
{
		?>
		
		<ul id="menu-main-menu" class="list-unstyled">
		<li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item  menu-item-286 <?php if(basename('index.php') && $pages == 'home') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'applypay_info') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'apptest_info') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'other_info') {?>active<?php } ?> ">
			<a title="Home" href="index.php?page=home">
				Home <span></span>
			</a>
		</li>


		<li id="menu-item-273" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-273 <?php if(basename('index.php') && $pages == 'about') {?>active<?php } ?> ">
			<a title="About" href="index.php?page=about">
				About<span></span>
			</a>
		</li>
		<li id="menu-item-276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-276 <?php if(basename('index.php') && $pages == 'contact') {?>active<?php } ?>">
			<a title="Contact" href="index.php?page=contact">
				Contact<span></span>
			</a>
		</li>
		
		<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-274 <?php if(basename('index.php') && $pages == 'pdf_download') {?>active<?php } ?>">
			<a title="Login" href="index.php?page=pdf_download">
				PDF Download<span></span>
			</a>
		</li>
		
		<li id="menu-item-274" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-274 <?php if(basename('index.php') && $pages == 'login') {?>active<?php } ?> && <?php if(basename('index.php') && $pages == 'forget_password') {?>active<?php } ?> <?php if(basename('index.php') && $pages == 'setnewpassword') {?>active<?php } ?>">
			<a title="Login" href="index.php?page=login">
				Login<span></span>
			</a>
		</li>
				
		
		</ul>
<?php
}
?>