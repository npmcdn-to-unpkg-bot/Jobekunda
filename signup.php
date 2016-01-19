<?php include 'config/setup.php';


session_start();

//Form Tokken
$form_token = md5( uniqid('auth', true) );

//session form token
$_SESSION['form_token'] = $form_token;

?>
<!DOCTYPE html>
<html>
<head>
   <title>MyTailor | Creat Account</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="images/favicon.png" />
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
      

<div id="page signup-page" >
	   <!-- Header -->

 


	<div class="signup-wrapper" style="margin-top: 7em;">
			<section id="ui-head">
				<legend>Sign Up</legend>
			</section>	
			<form id="signup-form" style="text-align: center;" method="post" action="reg.php">

				<input type="text" name="firstname" placeholder="First-Name" style="width: 45%;float: left;">
				<input type="text" name="lastname" placeholder="Last-Name" style="width: 45%;float: right;">
				<input type="email" name="email" placeholder="Email Address">
				<input type="password" name="password" placeholder="Password" autocomplete="off">
				<input type="password" name="re-password" placeholder="Re-type Password" autocomplete="off">
				<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
				<input type="submit" name="signup" value="Sign up">
			</form>	
			<p>By signing up, you agree to the <a href="#">Terms of Service</a></p>
	</div>

	<!-- 	<div>
			<p>Already have an account?<a href="#">Log In</a></p>

		</div>
 -->




</div>


</body>
</html>	