<!doctype html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Login | Create Account</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/register.css">
		<style>
			body {
				background-image: url(images/background/paisley.png);
			}
		</style>
	</head>
	<body>
		<div id="signup_container">
			<div id="signup_wrapper">
				<div id="usersignup" class="animate form">
					<form action="user.php" autocomplete="on">
						<h1>Create Your Account</h1>
						<p>
							<label for="signup_fullname" class="signup_fullname" data-icon="n">Your Full Name</label>
							<input id="signup_fullname" name="signup_fullname" type="text" placeholder="Moses Gerrard" required="required"/>
						</p>
						<p>
						<label for="signup_username" class="signup_username" data-icon="u">Your Username</label>
						<input id="signup_username" name="signup_username" type="text" placeholder="thelatinBoy1" required="required"/>
						</p>
						<p>
							<label for="signup_email" class="signup_email" data-icon="e">Your Email</label>
							<input id="signup_email" name="signup_email" type="email" placeholder="musa@grts.gm" required="required"/>
						</p>
						<p>
							<label for="signup_phone" class="signup_phone" data-icon="m">Your Mobile</label>
							<input id="signup_phone" name="signup_phone" type="tel" placeholder="9440801" required="required"/>
						</p>
						<p>
							<label for="signup_password" class="signup_password" data-icon="p">Your Password</label>
							<input id="signup_password" name="signup_password" type="password" placeholder="xxxxxxxxx" required="required"/>
						</p>
						<p>
							<label for="signup_confirm" class="signup_confirm" data-icon="c">Please Confirm Password</label>
							<input id="signup_confirm" name="signup_confirm" type="password" placeholder="xxxxxxxxxx" required="required"/>
						</p>
						<p class="signup button">
							<input type="submit" value="Create Account"/>
						</p>
						<p class="change_link">
							Already a member?
							<a href="login.php" class="toregister">Go and Login</a>
						</p>
					</form>				
				<div>
			</div>	
		</div>
	</body>
</html>	