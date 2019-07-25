<?php
require "header.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<main>
		<div class="Wrapper_main">
			<section class="section-default">
				<h1>SIGNUP</h1>
				<form action="includes/signup.inc.php" method="POST">
					<input type="text" name="username" placeholder="username" required>
					<input type="text" name="uid" placeholder="uid" required>
					<input type="text" name="email" placeholder="email" required>
					<input type="password" name="pwd" placeholder="password" required>
					<input type="password" name="pwd-repeat" placeholder="Repeat password" >
					<input type="text" name="phone" placeholder="phone" required>
					<input type="text" name="city/town" placeholder="city/town" required>
					<button type="submit" name="signup-submit">SIGNUP</button>

			</section>
	</main>
 
</body>
</html>