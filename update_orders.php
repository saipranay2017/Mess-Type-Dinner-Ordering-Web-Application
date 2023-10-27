<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
echo "$_SESSION[user]";

$sql = "SELECT Cid from Register where Email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['user']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$c = $row["Cid"];
$stmt->close();

$sql = "UPDATE Orders SET 
        Sunday = ?,
        Monday = ?,
        Tuesday = ?,
        Wednesday = ?,
        Thrusday = ?,
        Friday = ?,
        Saturday = ?
        WHERE Cid = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $_POST['sun'], $_POST['mon'], $_POST['tue'], $_POST['wed'], $_POST['thr'], $_POST['fri'], $_POST['sat'], $c);

if ($stmt->execute()) {
    header('Location: order_home.php');
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

