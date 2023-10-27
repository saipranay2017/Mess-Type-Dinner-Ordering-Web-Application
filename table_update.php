<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// $sql = "DROP TABLE Update1";
$sql = "CREATE TABLE Update1 (
    Cid INT(4) NOT NULL,
    Order_date Date NOT NULL,
    Item VARCHAR(20))";
    echo "<br>";
    if ($conn->query($sql) === TRUE) {
      echo "New Table of Update1 created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  ?>