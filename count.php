<html>
    <head>
        <link rel="stylesheet" href="table.css">
        </head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$sumvb=0;
$sumnb=0;
$sumvf=0;
$sumnf=0;
$sumrc=0;
$sumcr=0;
$dateString = $_POST["date"];
$day = date("l", strtotime($dateString));
$sql = "SELECT Cid FROM Update1 WHERE Order_date='$_POST[date]' EXCEPT SELECT Cid FROM Cancel WHERE Cancel_date='$_POST[date]'";
$result = $conn->query($sql);
		if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $sql1 = "SELECT *FROM UPDATE1 WHERE Cid='$row[Cid]'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) {
                switch($row1["Item"])
                {
                    case "Veg Biryani":
                        $sumvb = $sumvb + 1;
                        break;
                    case "Chicken Biryani":
                        $sumnb = $sumnb + 1;
                        break;
                    case "Veg Fried Rice":
                        $sumvf = $sumvf + 1;
                        break;
                    case "Chicken Fried Rice":
                        $sumnf = 1;
                        break;
                    case "Rice and Curries":
                        $sumrc = $sumrc + 1;
                        break;
                    case "Curd Rice":
                        $sumcr = $sumcr + 1;
                        break;
                }
            }}}}
$sql2 = "SELECT Cid from Orders Except SELECT Cid FROM Update1 WHERE Order_date='$_POST[date]' EXCEPT SELECT Cid from Cancel WHERE Cancel_date='$_POST[date]'";
$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
            while($row2 = $result2->fetch_assoc()) {
                $sql3 = "SELECT *from Orders where Cid=$row2[Cid]";
                $result3 = $conn->query($sql3);
		if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()) {
                switch($row3[$day])
                {
                    case "Veg Biryani":
                        $sumvb = $sumvb + 1;
                        break;
                    case "Chicken Biryani":
                        $sumnb = $sumnb + 1;
                        break;
                    case "Veg Fried Rice":
                        $sumvf = $sumvf + 1;
                        break;
                    case "Chicken Fried Rice":
                        $sumnf = $sumnf + 1;
                        break;
                    case "Rice and Curries":
                        $sumrc = $sumrc + 1;
                        break;
                    case "Curd Rice":
                        $sumcr = $sumcr + 1;
                        break;
                }
            }}}}
?>
<body><br><br><Br>
<h2 style="font-size=34px;"><center>Number of Orders for each Dinner Item on <?php echo $_POST["date"];?></center></h2><br><br><br><Br>
<table class="data-table">
		<thead>
            <tr>
                <th> Veg Biryani </th>
                <td><?php echo $sumvb ;?></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th> Chicken Biryani </th>
                <td><?php echo $sumnb ;?></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th> Veg Fried Rice </th>
                <td><?php echo $sumvf ;?></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th> Chicken Fried Rice </th>
                <td><?php echo $sumnf ;?></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th> Rice and Curries </th>
                <td><?php echo $sumrc ;?></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <th> Curd Rice </th>
                <td><?php echo $sumcr ;?></td>
            </tr>
        </thead>
    </table>
        </body>
        </html>