<!DOCTYPE html>
<html>
<head>
	<title>Data</title>

	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
	<nav class ="navbar navbar-expand-Il navbar-info bg-info">
	<h3 class="text-white">Data and Document</h3>
	</nav>

  <div class="formdesign">
    <ul class="navbar-nav">
      <div class="formdesign"><a href="doctorlist.php" class="nav-link text-black">Total Doctors List</a></div>
    </ul>
    </div>

  <div class="formdesign">
    <ul class="navbar-nav">
      <div class="formdesign"><a href="doctorsearch.php" class="nav-link text-black">Search Doctor</a></div>
    </ul>
    </div>

    <div class="formdesign">
    <ul class="navbar-nav">
      <div class="formdesign"><a href="patientlist.php" class="nav-link text-black">Total Patient Addmitted</a></div>
    </ul>
    </div>

    <div class="formdesign">
    <ul class="navbar-nav">
      <div class="formdesign"><a href="patiensearch.php" class="nav-link text-black">Search Patient</a></div>
    </ul>
    </div>

	<div class="col-md-2 mx-0">
		<ul class="navbar-nav">

		<button onclick="Back()">Back</button>
		<script> 
			function Back()
			{
				window.history.back();
			}
		</script>

</body>
</html>