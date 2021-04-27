<!DOCTYPE html>
<html>
<head>
	<title>IT section</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: url(image/2.jpg) no-repeat; background-size: cover;">

	<center>
	<nav class ="navbar navbar-expand-Il navbar-info bg-info">
	<h3 class="text-white">IT Section</h3>
	</nav>

		<div class="col-md-4 mx-1 shadow">
		<ul class="navbar-nav">
			<div class="nav-item"><a href="RegistrationSelf.php" class="nav-link text-black">Registration</a></div>
		</ul>
		</div>

		<div class="col-md-4 mx-1 shadow">
		<ul class="navbar-nav">
			<div class="nav-item"><a href="login.php" class="nav-link text-black">Login</a></div>
		</ul>
		</div>

		<div class="col-md-4 mx-1 shadow">
		<ul class="navbar-nav">
			<div class="nav-item"><a href="logout.php" class="nav-link text-black">Logout</a></div>
		</ul>
		</div>

		<div class="col-md-4 mx-1 shadow">
		<ul class="navbar-nav">
			<div class="nav-item"><a href="Setting.php" class="nav-link text-black">Setting</a></div>
		</ul>
		</div>

		<br>

		<div class="col-md-2 mx-0">
		<ul class="navbar-nav">

		<button onclick="Back()">Back</button>
		<script> 
			function Back()
			{
				window.history.back();
			}
		</script>

		</ul>
		</div>
	</center>

</body>
</html>