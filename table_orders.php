<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE Orders (
    Cid INT(4) NOT NULL,
    Order_date Date NOT NULL,
    Duration int NOT NULL,
    Sunday VARCHAR(20),
    Monday VARCHAR(20),
    Tuesday VARCHAR(20),
    Wednesday VARCHAR(20),
    Thursday VARCHAR(20),
    Friday VARCHAR(20),
    Saturday VARCHAR(20))";
    echo "<br>";

    //  $sql = "DROP TABLE Orders"; 
    
    if ($conn->query($sql) === TRUE) {
      echo "New Table of Orders created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  ?>