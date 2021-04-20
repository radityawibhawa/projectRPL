<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
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
						<div class="panel panel-default">
						<?php
						if($login_button == '')
						{
							echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    						echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    						echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    						echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    						echo '<h3><a href="logout.php">Logout</h3></div>';
						}
						else{
							echo '<div align="center">'.$login_button . '</div>';
						}	
						?>
						</div>
					</div>
				</div>		
			</div>
		</form>
	</div>
</body>