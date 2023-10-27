<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$day=date("l");
$list=array("Veg Biryani"=>120,"Chicken Biryani"=>150,"Veg Fried Rice"=>90,"Chicken Fried Rice"=>130,"Curd Rice"=>40,"Rice and Curries"=>80);
$query = "SELECT Cid FROM Update1 WHERE Order_date='$_POST[date]' EXCEPT SELECT Cid FROM Cancel WHERE Cancel_date='$_POST[date]'";	
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders Table</title>
<link rel="stylesheet" href="table.css">
</head>
<body><br><br>
	<h2><center>Orders of <?php echo $_POST["date"]?></center></h2><br><br><br>
	<table class="data-table">
		<!-- <caption class="title">Dinner Orders</caption> -->
		<thead>
			<tr>
				<!-- <th>Cid</th> -->
       			<th>Customer Name</th>
				<th>Phone Number</th>
				<th>Item</th>
				<th>Address</th>
        		<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$query1="SELECT *FROM Update1 WHERE Cid='$row[Cid]'";
					$result1 = $conn->query($query1);
					if ($result1->num_rows > 0) {
						while($row1 = $result1->fetch_assoc()) {
				?>
				<tr>
				<!-- <td><?php// echo $row["Cid"]; ?></td> -->
				<?php
				$query2 = "SELECT *FROM Register WHERE Cid='$row[Cid]'";	
				$result2 = $conn->query($query2);
				if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {
				?>
				<td><?php echo $row2["Full_Name"]; ?></td> 
				<td><?php echo $row2["Phone"];?></td>
				<td><?php echo $row1["Item"]; ?></td>
				<td><?php echo $row2["Address1"];?></td>
				<td><?php echo "₹ ".$list[$row1["Item"]];?></td>
				</tr>
				<?php
						}}	}}}}
			?>
		<?php
		$today = new DateTime($_POST["date"]);
		$query2= "SELECT Cid FROM Orders EXCEPT SELECT Cid FROM Update1 WHERE Order_date='$_POST[date]' EXCEPT SELECT Cid FROM Cancel WHERE Cancel_date='$_POST[date]'";
		$result2 = $conn->query($query2);
		if ($result2->num_rows > 0) {
			while($row2 = $result2->fetch_assoc()) {
				$query3 = "SELECT *FROM Orders WHERE Cid=$row2[Cid]";
				$result3= $conn->query($query3);
				if ($result3->num_rows > 0) {
					while($row3 = $result3->fetch_assoc()) {
					$st = new DateTime($row3["Order_date"]);
					$interval = $st->diff($today);
					$t = $interval->days;
					if ($today<$st){$t=-($t);}
					if($t < ($row3["Duration"]*7) && $t>=0)
					{
			?><tr>
				<!-- <td><?php //echo $row3["Cid"];?></td> -->
				<?php
				$query4 = "SELECT *FROM Register WHERE Cid='$row3[Cid]'";	
				$result4 = $conn->query($query4);
				if ($result4->num_rows > 0) {
					while($row4 = $result4->fetch_assoc()) {
				?>
				<td><?php echo $row4["Full_Name"];?></td>
				<td><?php echo $row4["Phone"];?></td>
				<td><?php echo $row3[$day];?></td>
				<td><?php echo $row4["Address1"];?></td>
				<td><?php echo "₹ ".$list[$row3[$day]];?></td>
					</tr>
			<?php
			
			}}}}}}}?>
		</tbody>
	</table>
</body>
</html>