<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT *FROM Orders";		//EXCEPT SELECT Cid FROM Cancel where Cancel_date='$_POST[date]'
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders Table</title>
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="nav.css">
</head>
<body>
<div id="showcase">
        <header>
            <nav>
                <ul>
                  <li><a href="admin.php">Home</a></li>
                    <li><a href="select_registration_table.php">Registred Members</a></li>
                    <li><a href="select_order_table.php">Mess Orders</a></li>
                    <li><a href="select_update_table.php">Updated Orders</a></li>
                    <li><a href="select_cancel_table.php">Cancelled Orders</a></li>
                    <!-- <li><a href="email.php">Send emails</a></li> -->
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#">Admin</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
</header>
</div>
	<table class="data-table">
		<caption class="title">Dinner Orders</caption>
		<thead>
			<tr>
				<th>Cid</th>
       	<th>Start Date</th>
				<th>Duration</th>
				<th>Sunday</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thrusday</th>
        <th>Friday</th>
        <th>Saturday</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
				?>
				<tr>
				<td><?php echo $row["Cid"]; ?></td>
				<td><?php echo $row["Order_date"]; ?></td> 
				<td><?php echo $row["Duration"] . " week";?></td>
        <td><?php echo $row["Sunday"];?></td>
        <td><?php echo $row["Monday"];?></td>
        <td><?php echo $row["Tuesday"];?></td>
        <td><?php echo $row["Wednesday"];?></td>
        <td><?php echo $row["Thursday"];?></td>
        <td><?php echo $row["Friday"];?></td>
        <td><?php echo $row["Saturday"];?></td>
				</tr>
        <?php
        }
      }
        ?>
        </tbody>
        </body>
        </html>