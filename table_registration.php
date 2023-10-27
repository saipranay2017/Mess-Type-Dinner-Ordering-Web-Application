<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE Register (
    Cid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Full_Name VARCHAR(50) NOT NULL,
    Phone VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Address1 VARCHAR(300) NOT NULL,
    Password1 VARCHAR(20) NOT NULL)";
    echo "<br>";
// $sql = "DROP TABLE Register"; 
    if ($conn->query($sql) === TRUE) {
      echo "Table Register created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  ?>