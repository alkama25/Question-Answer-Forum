<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Login Form</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="col-lg-6">
				<h2>Sign in Form</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">sign in</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
