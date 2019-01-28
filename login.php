<?php
	include 'header1.php';
	header('location:homepage.php');
?>
<section class="content">
	<div class="box">
		
			
		
		<div class="box-body">
			<form action="validation.php" class="form-horizontal" method="post">
				<div class="row form-group">
					<div class="col-sm-6">
						<h2> Login Form</h2>
						<label>Username</label>
						<input type="text" name="username" class="form-control">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
					<div class="col-sm-6">
						<h2> Registration Form </h2>
						<label>Username</label>
						<input type="text" name="username" class="form-control">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
						<button type="submit" class="btn btn-primary">Sign in</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
