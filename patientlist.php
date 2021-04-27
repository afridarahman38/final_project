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

$sql="SELECT * FROM patient WHERE username like '$q%'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>phone</th>
<th>username</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
  
  // ?>
<!--    <td><a href="../viewer/editEmployee.php?id=<?php echo $row['id'] ?>">Edit</a>&nbsp<a href="../controller/deleteEmployee.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>-->
  <?php
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>

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