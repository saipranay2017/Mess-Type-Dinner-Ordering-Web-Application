<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

$conn = new mysqli($servername, $username, $password, $dbname);
// $sql = "DROP TABLE Cancel";
$sql = "CREATE TABLE Cancel  (
    Cid INT(4) NOT NULL,
    Cancel_date Date NOT NULL)";
    echo "<br>";
    if ($conn->query($sql) === TRUE) {
      echo "New Table of Cancel created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  ?>