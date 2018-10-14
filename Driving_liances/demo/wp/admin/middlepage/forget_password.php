<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup - Slate Admin 2.0</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">   
    
    <!-- Styles -->
    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/bootstrap-overrides.css" rel="stylesheet">
    
	<link href="../css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        
    <link href="../css/slate.css" rel="stylesheet">
    
	<link href="../css/components/signin.css" rel="stylesheet" type="text/css">  
    
    
    <!-- Javascript -->
    
    <script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/jquery-ui-1.8.18.custom.min.js"></script>    
	<script src="../js/jquery.ui.touch-punch.min.js"></script>
	<script src="../js/bootstrap.js"></script>

	<script src="../js/demos/signin.js"></script>
	<script src="../js/validation.js"></script>

</head>

<body>




<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="forget_password_action.php" method="post">
		
			<h1>Forget Password</h1>			
			
			<div class="login-fields">

				<div class="field">
					<label for="email">Email ID:</label>
					<input type="email" id="email" name="email" value="" placeholder="Email" class="login" required onblur="return email_fun();"/>
					<center><label id="email_msg"></label></center>
				</div> <!-- /field -->
				<div class="field">
					<label for="contact">Name:</label>
					<input type="text"  id="name" name="name" value="" placeholder="name" class="login" required/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
									
				<button class="button btn btn-primary btn-large" id="submit" name="submit">Send</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->


</body>
</html>
