<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

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

	<?php

		session_start();

		$name = $username = $password1= $password2= $password ="";
		$nameErr = $usernameErr= $password1Err= $password2Err = $passwordErr ="";

		if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				include('connection.php');

				$name = $_POST['name'];
				
				$username = $_POST['username'];
				$password1 = $_POST['password1'];
				$password2 = $_POST['password2'];


				if (empty($_POST['name'])) 
					{
						$nameErr = "please fill up properly";
					}
				else
					{
						$name = $_POST['name'];
					}
				
				if (empty($_POST['username'])) {
					$usernameErr = "please fill up properly";
				}
				else
					{
						$username = $_POST['username'];
					}
				if (empty($_POST['password1'])) 
				{
					$password1Err = "please fill up properly";
				}
				else
					{
						$password1 = $_POST['password1'];
					}
				if (empty($_POST['password2'])) {
					$password2Err = "please fill up properly";
				}
				if ($password1 !== $password2) 
				{
					$passwordErr = "password doesn't match";
				}

				if(empty($nameErr) && empty($usernameErr) && empty($password1Err) && empty($password2Err) && empty($passwordErr))
				{
					$password = base64_encode($password1);
        			$insertQuery = "INSERT into it (name, username, password) values ('$name', '$username', '$password')";

	       			$result = mysqli_query($conn, $insertQuery);

	       			if ($result) 
		            {
		                //$_SESSION['uname'] = $uname;
		            	header("Location: login.php");
		            	die();
		            }
            
        		}         	
		}
		
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<div class="header">
		<h1>Registration</h1>
		
	</div>

	<form name="regForm" action="RegistrationSelf.php" onsubmit="return validateForm()" method="POST">
		<p><span class="error" >*required field</span></p>

		<legend><b> Information:</b></legend>
	
	    <label for="name">Name: </label>
		<input type="text" name="name" id="name">
		<p><span style="color: red">
			<?php echo $nameErr; ?>			
		</span></p>
	

		<label for="username">UserName: </label>
		<input type="text" name="username" id="username">
		<p><span style="color: red">
			<?php echo $usernameErr; ?>
		</span></p>
	
		<label for="password1">Password: </label>
		<input type="Password" name="password1" id="password1">
		<p><span style="color: red">
			<?php echo $password1Err; ?>
		</span></p>
		
		<label for="rmail">Confirm Password: </label>
	    <input type="Password" name="password2" id="password2">
	    <p><span style="color: red">
	    	<?php echo $password2Err; ?>
	   	</span></p>
	    <br>
	

	<div class="input">
		<button type="submit" name="Registration" class="btn">Submit</button>
	</div>

	<p>
		Already registered?<a href="login.php">Login</a>
	</p>
	</form>

	<script type="text/javascript">
		function validateForm()
		{
			var name = document.forms['regForm']['name'].value;
			if (name=="") 
			{
				alert("Please enter name.");
				return false;
			}

			var username = document.forms['regForm']['username'].value;
			if (username=="") 
			{
				alert("Please enter Username.");
				return false;
			}

			var password1 = document.forms['regForm']['password1'].value;
			if (password1=="") 
			{
				alert("Please enter Password.");
				return false;
			}

			var password2 = document.forms['regForm']['password2'].value;
			if (password2=="") 
			{
				alert("Please confirm password.");
				return false;
			}

			if(password1!= password2)
			{
				alert("Passwords don't match");
				return false;
			}
		}
		

	</script>
	
	</body>
	</html>


	