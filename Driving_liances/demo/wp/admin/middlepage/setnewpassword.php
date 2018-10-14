
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login - Slate Admin 2.0</title>

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


</head>

<body>



<div class="account-container login">

<div class="content clearfix">

<form action="setnewpassword_action.php" enctype="multipart/form-data" method="post">

<h1>Set New Password</h1>		

<div class="login-fields">

<div class="field">
<label for="password">Password:</label>
<input type="hidden" name="a_id" id="a_id" value="<?php echo $_GET['a_id']; ?>"/>
<input type="text" id="password" name="password" placeholder="Password" />
</div> <!-- /field -->

<div class="field">
<label for="password1">Confirm Password:</label>
<input type="password" id="con_password" name="con_password" placeholder="con_password"/>
</div> 

</div> <!-- /login-fields -->


<button class="button btn btn-secondary btn-large" name="submit">Submit</button>

</div> <!-- .actions -->

</form>

</div> <!-- /content -->

</div> <!-- /account-container -->


<!-- Text Under Box -->



</body>
</html>
