<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.login-container {
  width: 400px;
  margin: 100px auto;
  padding: 20px;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
}

button[type="submit"] {
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

a{
  color:black;
  text-decoration:none;
}
button[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
  </head>
  <body>
    <div class="login-container">
      <h1>Login</h1>
      <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" placeholder="Enter your Email" name="1" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your Password" name="2" required>

        <button type="submit" id="login-button"><a href="validate.php">Login</a></button>
      </form>
    </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Password1 FROM Register WHERE Email='$_POST[1]'";
$result = $conn->query($sql);
$f=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($_POST[2]==$row["Password1"])
    {
        $f=1;
        ?><script>alert("<?php echo 'Login Successfull';?>");</script>
        <?php session_start();
        $_SESSION["user"]=$_POST[1];
        echo "$_SESSION[user]";
        echo "<br>";  
    }
  }}
  if ($f==1) {
    header('Location: order_home.php');
    exit;
  } else {
    echo "<script>alert('Invalid credentials. Please try again.');</script>";
  }}
?>
  </body>
</html>
