<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}

		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}
		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}

		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			/* text-transform: uppercase; */
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}

		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}

		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;

		}

		.data-table tfoot th:first-child {
			text-align: center;
		}

		.data-table tbody td:empty {
			background-color: #ffcccc;
		}
        a{
      text-decoration:None;
      
    }
	</style>
	<link rel="stylesheet" href="nav.css">
</head>
<header>
<div id="showcase">
        <header>
            <nav>
                <ul>
                    <li><a href="order_home.php">Orders Home</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
					<li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"><?php session_start(); echo "$_SESSION[user]"?></a></li>
                </ul>
            </nav>
</header><body><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT Cid from Register where Email='$_SESSION[user]'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$c = $row["Cid"];
}
$sql1 = "SELECT *FROM Orders where Cid=$c";
$result1 = $conn->query($sql1);	
?>
    <h1> <l style="color:black">Your Orders</l> </h1><br>
<table class="data-table">
		<thead>
			<tr>
				<th>Cid</th>
       			<th>Start_date</th>
                <th>Duration</th>
                <th>End Date</th>
				<th>Sunday</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thrusday</th>
        		<th>Friday</th>
        		<th>Saturday</th>
			</tr>
		</thead>
        <?php
        if ($result1->num_rows > 0) {
            while($row1 = $result1->fetch_assoc()) {
        ?>
        <tr>
                <td><?php echo $row1["Cid"]; ?></td>
                <td><?php echo $row1["Order_date"]; ?></td>
                <td><?php echo $row1["Duration"] . " weeks"; ?></td>
                <td><?php $d=($row1["Duration"])*7-1;
$date = date("$row1[Order_date]"); 
$new_date = date('Y-m-d', strtotime($date . ' + ' .($d) . ' days'));
echo $new_date;
?></td>
				<td><?php echo $row1["Sunday"]; ?></td>
				<td><?php echo $row1["Monday"]; ?></td>
				<td><?php echo $row1["Tuesday"]; ?></td>
				<td><?php echo $row1["Wednesday"]; ?></td>
				<td><?php echo $row1["Thursday"]; ?></td>
        		<td><?php echo $row1["Friday"]; ?></td>
        		<td><?php echo $row1["Saturday"]; ?></td>
        		
			</tr>
			<?php
			}
        }
        $sql2 = "SELECT *FROM Update1 Where Cid=$c";
        $result2 = $conn->query($sql2);	
?>
</table>
    <h1> Updated Orders </h1><br><Br>
<table class="data-table">
		
        <?php
        if ($result2->num_rows > 0) {?>
            <thead>
			<tr>
				<th>Cid</th>
       			<th>Date</th>
				<th>Item</th>
			</tr>
		</thead><?php
            while($row2 = $result2->fetch_assoc()) {
        ?>
        <tr>
                <td><?php echo $row2["Cid"]; ?></td>
                <td><?php echo $row2["Order_date"]; ?></td>
				<td><?php echo $row2["Item"]; ?></td>
			</tr></table>
			<?php
			}
        }
        else{ echo "No Updated Orders";
        }
        $sql3="SELECT *FROM Cancel WHERE Cid=$c"; 
        $result3 = $conn->query($sql3);	?>
</table>
    <h1> Cancelled Orders </h1><br><Br>
<table class="data-table">
		
        <?php
        if ($result3->num_rows > 0) {?>
            <thead>
			<tr>
				<th>Cid</th>
       			<th>Cancel Date</th>
			</tr>
		</thead><?php
            while($row3 = $result3->fetch_assoc()) {
        ?>
        <tr>
                <td><?php echo $row3["Cid"]; ?></td>
                <td><?php echo $row3["Cancel_date"]; ?></td>
			</tr>
			<?php
			}
        }
        else{ echo "No Cancelled Orders";
        }?>
        </table>
</body>
</html>