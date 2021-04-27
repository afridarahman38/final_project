<?php 
    require_once "connection.php";
    session_start();
    $username="";
    if(!isset($_SESSION["username"]))
    {
        header("location: login.php");
        exit;
    }
    $username = $_SESSION['username'];
    $password = $newPassword = $newPasswordConfirm = "";
    $passwordErr = $newPasswordErr = $newPasswordConfirmErr = "";
    $error = $success="";

    if ($_SERVER['REQUEST_METHOD']== "POST") 
    {
        $password = $_POST["password"]; 
        $newPassword = $_POST["newPassword"]; 
        $newPasswordConfirm = $_POST["newPasswordConfirm"];  

         if(empty($_POST["password"]))
         {
             $passwordErr = "Please enter a password.";
         }
         if(empty($_POST["newPassword"]))
         {
             $newPasswordErr = "Please enter a new password.";
         }

         if(empty($_POST["newPasswordConfirm"]))
         {
             $newPasswordConfirmErr = "Please enter a new confirmed password.";
         }
         if (empty($passwordErr) && empty($newPasswordErr) && empty($newPasswordConfirmErr)) 
         {
             $encPassword = base64_encode($password);
             $result = mysqli_query($conn, "SELECT password FROM it WHERE username='$username'");
             $row = mysqli_fetch_assoc($result);

            $oldpassword = $row ['password'];
             if(!$result)
            {
                $error = "The username you entered does not exist";
            }
            else if($encPassword!= $row ['password'])
            {
                $error = "You entered an incorrect password";
            }
            if($newPassword=$newPasswordConfirm)
            {
                $encPassword2 = base64_encode($newPassword);
                $sql=mysqli_query($conn, "UPDATE it SET password='$encPassword2' where username='$username'");
            }
            if($sql)
            {
                $success= "Congratulations You have successfully changed your password";
            }
               else
            {
                   $error= "Passwords do not match";
               }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Change Form </title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<nav class ="navbar navbar-expand-Il navbar-info bg-info">

	<h3 class="text-white">Password Change Form </h3>
	</nav>	

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<label><b> Password Change: </b></label>
		<?php 
		echo $success; 
		?>
		<br>
		<label>Current Password: </label>
		<input type="password" name="password">
		<span class="error">* <?php echo $passwordErr;?></span>
		<br>

	    <label for="password">New Password: </label>
	    <input type="password" name="newPassword">
	    <span class="error">* <?php echo $newPasswordErr;?></span>
	    <br>

	     <label for="password">Comfrim Password: </label>
	    <input type="password" name="newPasswordConfirm">
	    <span class="error">* <?php echo $newPasswordConfirmErr;?></span>
	    <br>

	    <?php 
		echo $error; 
		?>

	<input type="submit" value="Submit" > 
	</form>

	<div class="col-md-2 mx-1">
		<ul class="navbar-nav">

		<p>
			Go to Home Page<a href="header.php">HomePage</a>
		</p>

		<button onclick="Back()">Back</button>
		<script> 
			function Back()
			{
				window.history.back();
			}
		</script>

		

</body>
</html>