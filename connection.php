	<?php 

		$hostname = "localhost";
		$username = "user";
		$password = "123";
		$dbname = "hospitalms";

		$conn = mysqli_connect($hostname, $username, $password, $dbname);

		if ($conn->connect_error)
	    {
	       die("Error". mysqli_connect_error());
	    }
		/*http://localhost/phpmyadmin/sql.php?db=hospitalms&table=it&pos=0 
		*/

		/*if ($conn->connect_error) 
		{
			echo "Database Connection Failed";
			echo "<br>";
			echo $conn->connect_error;
		}
		else
		{
			echo "Database Connection Successful";
		}*/
	?>

