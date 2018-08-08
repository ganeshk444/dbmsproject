
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

$sql="INSERT INTO salesman (sid,name,city,commission) VALUES ('$_POST[sid]','$_POST[name]','$_POST[city]','$_POST[commission]')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

