<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/regStyle.css" />
		<title>Registration</title>
	</head>
	<body>
		<main class="reg_form">
			<form action="db/reg.php" method="post">
				<h1>Registration</h1>
				<div class="input_box">
					<input type="text" placeholder="Username" name="username" />
				</div>
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
				<div class="input_box">
					<input
						type="password"
						placeholder="Repeat password"
						name="repeatpass"
					/>
				</div>
				<div class="button_reg">
					<button class="btn" type="submit">Register</button>
				</div>

				<div class="have_account">
					<label for="" class="account">Do you have an account?</label>
					<a href="login.php" class="login_account">Login</a>
				</div>
			</form>
		</main>
	</body>
</html>
