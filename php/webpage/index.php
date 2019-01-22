<html>
 <head>
  <title>Movies Table</title>
 </head>
 <body>
 <?php
$hostname = "mysql_container";
$username = "root";
$password = "password";
$data_base = "media";
$mysqli = new mysqli($hostname,$username,$password,$data_base);
$connection = mysqli_connect($hostname, $username, $password, $data_base);


$sql = "select * from Movies";
$result = $connection -> query($sql);
if (!$result = $mysqli->query($sql)) {
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;

}
echo '<table border=1>';
echo '<tr><th>Title</th><th>Genre</th><th>Rating</th>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
  echo '<td>' . $row['Title'] . '</td>';
  echo '<td>' . $row['Genre'] . '</td>';
  echo '<td>' . $row['Rating'] . '</td>';
  echo '</tr>';
}
echo '</table>';
mysqli_close($connection);
?>
 </body>
</html>