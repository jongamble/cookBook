<?php include('inc/html-head.php'); ?>
<body class="home">
	<?php include('inc/header.php'); ?>
		<div class="wrapper">
			<div class="login-wrapper">
				<h1>Cook Book</h1>
				<h2>Browse. Share. Cook.</h2>
				<div class="login-left">
					<h3>Signup</h3>
					<form action="/signup" class="home-sign-up">
						<label for="name">Name</label>
						<input type="text" name="name">
						<label for="email">Email</label>
						<input type="text" name="email">
						<label for="password1">Password</label>
						<input type="password" name="password1">
						<label for="password1">Confirm Password</label>
						<input type="password" name="password2">
						<button type="submit" name="submit">Sign Up</button>
					</form>
				</div>
				<div class="login-right">
					<h3>Log In</h3>
					<form action="/login" class="home-login">
						<label for="email">Email</label>
						<input type="text" name="email">
						<label for="password">Password</label>
						<input type="text" name="password">
						<button type="submit" name="submit">Log In</button>
					</form>
				</div>
			</div>
		</div>

	<?php include('inc/footer.php'); ?>