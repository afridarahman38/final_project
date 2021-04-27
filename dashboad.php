<?php 
	session_start();

    include('connection.php');
    $username = "";

    if(!isset($_SESSION["username"]))
    {
        header("location: login.php");
        exit;
    }
    $username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Registration</title>

    <style>
         body {
            padding: 10px 50px;
        }

        .formdesign {
            font-size: 20px;

        }

        .formdesign input {
            width: 50%;
            padding: 12px 20px;
            border: 1px solid blue;
            margin: 14px;
            border-radius: 4px;
            font-size: 15px;
        }

        .formerror {
            color: red;
        }

        .but {
            border-radius: 9px;
            width: 100px;
            height: 50px;
            font-size: 25px;
            margin: 22px 20px;
        } 
    </style> 

</head>
<body style="background: url(image/2.jpg) no-repeat; background-size: cover;">
	<center>
	<nav class ="navbar navbar-expand-Il navbar-info bg-info">

	<h3 class="formdesign">Dashbord</h3>
	</nav>
		<p>
		<h4> <?php 
			echo "Welcome to IT Section:" . " " . $username;
		?>
		</h4>
		</p>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="PasswordChange.php" class="nav-link text-black">Password Change</a></div>
		</ul>
		</div>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="Salary.php" class="nav-link text-black">Salary</a></div>
		</ul>
		</div>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="TimeSchedule.php" class="nav-link text-black">Time Schedule</a></div>
		</ul>
		</div>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="StoreData.php" class="nav-link text-black">Store data and documents of Doctor and Patient</a></div>
		</ul>
		</div>

		<div class="cformdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href=" " class="nav-link text-black">Daily checking mails</a></div>
		</ul>
		</div>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="logout.php" class="nav-link text-black">Logout</a></div>
		</ul>
		</div>

		<div class="formdesign">
		<ul class="navbar-nav">

		<br>

		<button onclick="Back()">Back</button>
		<script> 
			function Back()
			{
				window.history.back();
			}
		</script>
	</center>

</body>
</html>