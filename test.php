<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tharunproject";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT email From register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>