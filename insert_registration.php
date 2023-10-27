<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql="INSERT INTO Register(Full_Name,Phone,Email,Address1,Password1)
VALUES ('$_POST[name]','$_POST[number]','$_POST[email]','$_POST[address]','$_POST[psw]')";
// $sql = "DELETE FROM Register where Email='185022@gmail.com'";
  if (mysqli_query($conn, $sql)) {
    
    header('Location: login.php');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>