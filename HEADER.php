<!DOCTYPE html>
<html>
<head>
	<title> URBAMECHANIC</title>
	<link rel="stysheet" href="style.css">

</head>
<body>
	<header>
		<nav>
			<a href="#">
				<img src="img/IMG-20190517-WA0014" >
			</a>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="#">ABOUT</a></li>

			</ul>
			<div>
				<form action="includes/login.inc.php" method= "POST">
					<input type="text" name="mailUid" placeholder="username" required>
					<input type="password" name="pwd" placeholder="password" required>
					<button type="submit" name="login_submit"> LOGIN </button>
				</form>
				<a href="signup.php">Signup</a>
				<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="logout_submit">Logout</button>


			</div>
		</nav>
	</header>

</body>
</html>