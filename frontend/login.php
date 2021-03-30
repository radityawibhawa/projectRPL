<!D0CTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="loginstyle.css">
</head>
<body>

	<div>
		<?php
		if(isset($_POST['create'])){
			echo 'User Submitted';
		}
		?>
	</div>
	<div class="navbar">
		<nav>
			<ul>
				<li><a href="">Tentang Kami</a></li>
				<li><a href="registration.php">Daftar</a></li>
				<li><a href="login.php">Masuk</a></li>
			</ul>
		</nav>
	</div>
	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h1>Login</h1>
						<hr class="mb-3">
						<div class="form-group">
						<label for="nama"><b>Email</b></label> 
						<input class="form-control" type="text" name="email" required>
 						</div>
 						<div class=form-group>
						<label for="password"><b>Password</b></label>  
						<input class="form-control" type="text" name="password" required>
						</div>
						<br>
						<input class="btn btn-primary" type="submit" name="create" value="Log In">
					</div>
				</div>		
			</div>
		</form>
	</div>
</body>