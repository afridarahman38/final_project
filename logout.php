<!DOCTYPE html>
<html>
<head>
	<title>Logout from</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		
		header('Location: header.php');
	?>

	<nav class ="navbar navbar-expand-Il navbar-info bg-info">

	<h3 class="text-white">Logout Form </h3>
	</nav>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<label><b> Account Information: </b></label>
		<br>
		<label for="username">Username: </label>
		<input type="text" name="username" id="username">
		<p><?php echo $usernameErr; ?></p>
		<br>
	    <label for="password">Password: </label>
	    <input type="password" name="password" id="password">
	    <p><?php echo $passwordErr; ?></p>
	    <br>

	<input type="submit" value="Submit" > 

</body>
</html>