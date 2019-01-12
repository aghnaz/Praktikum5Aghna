<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location:beranda.php");
    }
    include ("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form-login.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
</head>
<body>
	<?php
			if(isset($_GET["error"])){
				if($_GET["error"] == "wrong"){
					echo	'<h3>Username dan Password salah!</h3>';
				}
			}
			if(isset($_GET["notif"])){
				if($_GET["notif"] == "logout"){
					echo '<h3>Berhasil logout!</h3>';
				}
			}
			if(isset($_POST["submit"])){
				echo do_login($_POST['username'], $_POST['password']);
			}
	?>
	<div class="wrapper">
		<div class="login-card">
			<div class="wrap-login">
				<div class="login-title" style="background-image: url(back2.jpg);">
					<span class="judul">
						Sign In
					</span>
				</div>

				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" >
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" method="post" name="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="js/main.js"></script>

</body>
</html>