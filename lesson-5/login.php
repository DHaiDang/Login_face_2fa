
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./img/murom.png"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<div>
		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
            }
            include './facebook_source.php';
		?>
		<div class="main_login">
			<p class="sign" align="center">Log in</p>
			<form class="form1" action="" method="post">
				<input class="un " type="text" name="username" align="center" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>"/>
				<input class="pass" type="password" name="password" align="center" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"/>
                <a href="<?= $loginUrl ?>"><img src="./images/facebook.png" alt='facebook login' title="Facebook Login" height="25" width="140" /></a>
				<input class="submit" align="center" type="submit" name='login' value="Login" />
			</form>
			<p class="forgot" align="left"><a href="forgot.php">Forgot Password?</p>
			<p style="padding-left:150px" class="forgot" align="right"><a href="register.php">Register</p>
		</div>
	</div>
</body>
</html>
