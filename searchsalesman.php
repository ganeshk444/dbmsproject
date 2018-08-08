<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orderdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM salesman WHERE sid='$_POST[name]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table border='1'><tr><th>Salesman ID</th><th>Salesman Name</th><th>City</th><th>Commission</th></tr>";
 $row = $result->fetch_assoc();
echo "<tr><td>".$row["sid"]."</td><td>".$row["name"]."</td><td>".$row["city"]."</td><td>".$row["commission"]."</td></tr>";
echo "</table>";
}
else
echo "Record not found";
?>