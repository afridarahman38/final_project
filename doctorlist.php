<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
a{
  color:white;
  text-decoration: none;
}
a:hover{
  color:yellow;
}
</style>
</head>
<body>

<?php
$q=$_GET['q'];

$conn=mysqli_connect('localhost','user','123','hospitalms');
if (!$conn) {
  die('Could not connect:'.mysqli_error($conn));
}

$sql="SELECT * FROM doctor WHERE username like '$q%'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>status</th>
<th>shift</th>
<th>username</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td>" . $row['shift'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  
?>

  <?php
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<br>
<button onclick="Back()">Back</button>
        <script> 
            function Back()
            {
                window.history.back();
            }
        </script>
</body>
</html>