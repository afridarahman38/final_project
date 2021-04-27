<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/empsearch.css">
    <title>Document</title>
</head>
<body>
<?php include 'Salary.php';?>
<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","salarylist.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div class="add">
<form>
<input type="text" name="users" id="users" placeholder="Search by name" oninput="showUser(this.value)">
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>
</div>
</body>
</html>