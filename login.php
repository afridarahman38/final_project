<?php
    require_once "connection.php";
    
    session_start();
    
    /*if (isset($_SESSION['username'])) 
    {
       header("Location: dashboad.php");
    }*/

    $username = $password ="";
    $usernameErr = $passwordErr ="";
    $error = "";
     
    if($_SERVER['REQUEST_METHOD']== "POST")
    {
         $username = $_POST["username"];
        
         $password = $_POST["password"];
        

         if(empty($_POST["username"]))
         {
             $usernameErr = "Please enter a username.";
         }

         if(empty($_POST["password"]))
         {
             $passwordErr = "Please enter a password.";
         }

         if(empty($usernameErr) && empty($passwordErr))
         {
             $encpassword = base64_encode($password);
             $sql = "SELECT * FROM it WHERE username = '$username' AND password='$encpassword'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) 
            {
                $row = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['username'] = $row['username'];
                header("Location: dashboad.php");
                exit;
            } 
            else 
            {
                $error = "Invalid username or password";
            }
         }
        
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

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

	<h3 class="text-white">IT Login Form </h3>
	</nav>

	<form name="loginForm" action="login.php" onsubmit="return validateForm()" method="POST">

		<p><span class="error" >*required field</span></p>

		<legend><b>Account Information:</b></legend>

		<div class="formdesign" id="username">
            <label> Username: </label>
            <input type="text" name="username" required>
            <br><b><span class="error"><?php echo $usernameErr; ?></span></b>
        </div>
        <br>
        <div class="formdesign" id="pass">
            <label> Password: </label>
            <input type="password" name="password" required>
            <br><b><span class="error"><?php echo $passwordErr; ?></span></b>
        </div>
	    <br>
	    <p class="error"> <?php echo $error;?></p>

		<div class="input">
			<button type="submit" name="Login" class="btn">Login</button>
		</div>
			<p>
				Not a member?<a href="RegistrationSelf.php">Registration</a>
			</p>
	</form>

	<script type="text/javascript">
		function validateForm()
		{

			var username = document.forms['loginForm']['username'].value;
			if (username=="") 
			{
				alert("Please enter Username.");
				return false;
			}

			var password = document.forms['loginForm']['password'].value;
			if (password=="") 
			{
				alert("Please enter Password.");
				return false;
			}

		}
		

	</script>

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

</center>

</body>
</html>