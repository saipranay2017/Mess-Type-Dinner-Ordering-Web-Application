<html>
    <head>
        <style>
             a{
      text-decoration:None;
      
    }
    header {
  background-color: #333;
  height: 35px;
  padding: 10px;
}

nav {
  display: flex;
  justify-content: space-between;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
}

nav li {
  margin-right: 20px;
}

nav a {
  color: white;
  text-decoration: none;
  font-size: 18px;
}
label {
  display: block;
  margin-bottom: 10px;
  font-size: 16px;
}

input[type="date"] {
  padding: 8px;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  width: 200px;
}
input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			transition: all 0.3s ease-in-out;
		}
		
		input[type="submit"]:hover {
			background-color: green;
			transform: translateY(-3px);
		}
		
		input[type="submit"]:active {
			transform: translateY(1px);
		}

            </style>
</head>
    <body>
    <header>
  <nav>
    <ul class="left-nav">
      <li><a href="order_home.php">Order Page</a></li>
      <!-- <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li> -->
    </ul>
    <ul class="right-nav">
      <li><a href="#"><?php session_start(); echo "$_SESSION[user]";?></a></li>
      <!-- <li><a href="#">Sign Up</a></li> -->
    </ul>
  </nav>
</header><br><br>
<form action="price.php" method="post"><br>
<label for="date"><p style="font-size:20px;color:blue;">Select the date when you want you check your order price: </p></label>
<input type="date" id="date" name="date"><br><br>
    <a href="price.php"><input type="submit" value="Cancel"></a>
    </form>
    <?php
    if(isset($_POST['date'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
echo "$_SESSION[user]";
$sql = "SELECT Cid from Register where Email='$_SESSION[user]'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$c = $row["Cid"];
}
$sql1 = "SELECT Price from Update1 where Order_date='$_POST[date]' AND Cid=$c";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        echo $row1["Price"];
    }
}
else
{
    $today = new DateTime($_POST["date"]);
    $sql2 = "SELECT Price,Order_date,Duration from Customer where Cid=$c";
    $result2 = $conn->query($sql2);	
			if ($result2->num_rows > 0) 
			{
				while($row2 = $result2->fetch_assoc()) 
				{
                    $st = new DateTime($row2["Order_date"]);
							$interval = $st->diff($today);
							if($interval->days < $row2["Duration"])
                            {
                                echo "<br>";
                                echo "Price: ".$row2["Price"];
                            }
}
}
else{echo "You have no orders present on this particualar date";}
}
    }
?>
</body>
</html>