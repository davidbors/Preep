<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap elements start -->
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Bootstrap elements end -->
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta charset="utf-8">
	<title>Contul tau Preep</title>
</head>
<body>
	<ul>
		<li><a href="index.html" >Preep</a></li>
		<li><a href="Search.php">Cauta teme</a></li>
		<li><a href="Offer.php">Ofera teme</a></li>
		<li class="right"><a href="TWF.php">The Weasel Foundation</a></li>
		<li class="right"><a href="Despre.php">Despre Preep</a></li>
		<li class="right"><a href="login.php" class="active">Contul tau</a></li>
	</ul>
	<div class="login">
		<form action="loginprocess.php" method="POST">
		<p>Autentifică-te cu contul tău Preep!</p>
		<input type="text" id="username" name="username" required placeholder="username" class="input"><br>
		<input type="password" id="password" name="password" required placeholder="password" class="input"><br>
		<input type="Submit" name="Submit" value="Login" id="Lgnbtn"><br>
		<p>Nu ai un cont Preep? Creeaza-ti unul!</p>
		<button id="Lgnbtn">Sign Up</button>
		</form>
	</div>

</body>
</html>
