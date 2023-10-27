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
$sql="INSERT INTO Orders (Cid,Order_date,Duration,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday)
VALUES ('$c','$_POST[a]','$_POST[b]','$_POST[sun]','$_POST[mon]','$_POST[tue]','$_POST[wed]','$_POST[thr]','$_POST[fri]','$_POST[sat]')";
//  $sql = 'TRUNCATE TABLE Orders';
  if (mysqli_query($conn, $sql)) {
    header('Location: order_home.php');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  ?>
