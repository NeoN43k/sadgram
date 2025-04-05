<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/loginStyle.css" />
		<title>Login</title>
	</head>
	<body>
		<main class="reg_form">
			<form action="db/log.php" method = "post">
				<h1>Login</h1>
				<div class="input_box">
					<input
						type="text"
						placeholder="Email address"
						name="email"
					/>
				</div>
				<div class="input_box">
					<input
						type="password"
						placeholder="Password"
						name="password"
					/>
				</div>
				<div class="remember_me">
					<label for=""><input type="checkbox" />Remember me</label>
					<a href="#" class="forg_pass">Forgot password?</a>
				</div>

				<div class="button_login">
					<button class="btn" type="submit">Login</button>
				</div>

				<div class="registration">
					<label for="" class="reg">Don`t have an account?</label>
					<a href="registr.php" class="reg_account">Signup</a>
				</div>
			</form>
		</main>
	</body>
</html>
