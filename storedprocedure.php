<?php
$sql = new mysqli("localhost", "root", "", "orderdb");
if ($sql->connect_errno) {
    echo "Failed to connect to MySQL: (" . $sql->connect_errno . ") " . $sql->connect_error;
}

if(!($res=$sql->query("CALL getrecord()"))) {
    echo "CALL failed:";
}

if ($res->num_rows > 0) {
echo "<table border='1' bgcolor=yellow><tr><th>Salesman ID</th><th>Salesman Name</th><th>City</th><th>Commission</th></tr>";
 while($row = $res->fetch_assoc())
echo "<tr><td>".$row["sid"]."</td><td>".$row["name"]."</td><td>".$row["city"]."</td><td>".$row["commission"]."</td></tr>";
echo "</table>";
}

echo $row;
?>
