
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

	</nav>
		<p>
		<h4> <?php 
			echo "Welcome to Salary Section:" . " " . $username;
		?>
		</h4>
		</p>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="salarylist.php" class="nav-link text-black">IT person information</a></div>
		</ul>
		</div>

		<div class="formdesign">
		<ul class="navbar-nav">
			<div class="formdesign"><a href="salarysearch.php" class="nav-link text-black">Search</a></div>
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