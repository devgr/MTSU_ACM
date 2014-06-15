<html>
	<head>
		<title>MTSU ACM :: Login</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.css.map">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css.map">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">

		<link rel="icon" type="image/ico" href="images/mt.ico">

		<script type="text/javascript" src="js/login.js"></script>
	</head>
	<body>
		<div class="btn-group" style="float:right">
			<button type="button" class="btn btn-default">1</button>
			<button type="button" class="btn btn-default">2</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="glyphicon glyphicon-align-justify"></span>
				<span class="glyphicon caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
			</ul>
		</div>

		<br><br><br>

		<form action="login_redirect.php" method="post">
			<div class="input-group" style="margin: auto">
				<input id="email" name="email" type="text" class="form-control" placeholder="Email" required=true onchange="checkemail(this)">
				<input id="password" name="password" type="password" class="form-control" placeholder="Password" required=true onchange="checkpass(this)">
				<center><button type="submit" class="btn btn-default">Login</button><center>
			</div>
		</form>

		<center><a href="forgotpass.php">Forgot your password?  Click here!</a></center>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>