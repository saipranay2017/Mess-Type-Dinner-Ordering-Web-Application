<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
echo "$_SESSION[user]";
$sql = "SELECT Cid from Register where Email='$_SESSION[user]'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$c = $row["Cid"];
}
$d=$_POST["date"];
?>
<?php 
$sql1="INSERT INTO Update1 (Cid,Order_date,Item)
VALUES ('$c','$_POST[date]','$_POST[item]')";
// $sql1 = "TRUNCATE TABLE Update1";
  if ($conn->query($sql1) == TRUE) {
    header('Location: order_home.php');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>