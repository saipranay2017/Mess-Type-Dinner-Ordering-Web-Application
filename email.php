<html>
	<head>
		<style>
			.btn-conteiner {
  display: flex;
  justify-content: center;
  --color-text: #ffffff;
  --color-background: #ff135a;
  --color-outline: #ff145b80;
  --color-shadow: #00000080;
}

.btn-content {
  display: flex;
  align-items: center;
  padding: 5px 30px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 30px;
  color: var(--color-text);
  background: var(--color-background);
  transition: 1s;
  border-radius: 100px;
  box-shadow: 0 0 0.2em 0 var(--color-background);
}

.btn-content:hover, .btn-content:focus {
  transition: 0.5s;
  -webkit-animation: btn-content 1s;
  animation: btn-content 1s;
  outline: 0.1em solid transparent;
  outline-offset: 0.2em;
  box-shadow: 0 0 0.4em 0 var(--color-background);
}

.btn-content .icon-arrow {
  transition: 0.5s;
  margin-right: 0px;
  transform: scale(0.6);
}

.btn-content:hover .icon-arrow {
  transition: 0.5s;
  margin-right: 25px;
}

.icon-arrow {
  width: 20px;
  margin-left: 15px;
  position: relative;
  top: 6%;
}
  
/* SVG */
#arrow-icon-one {
  transition: 0.4s;
  transform: translateX(-60%);
}

#arrow-icon-two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.btn-content:hover #arrow-icon-three {
  animation: color_anim 1s infinite 0.2s;
}

.btn-content:hover #arrow-icon-one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.btn-content:hover #arrow-icon-two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */
@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: var(--color-background);
  }

  100% {
    fill: white;
  }
}

/* Button animations */
@-webkit-keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}

@keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}
			</style>
			<link rel="stylesheet" href="table.css">
</head>
	<body><br><Br><br>
		<h3><center>Daily Orders Email Statuses</center></h3><br>
	<table class="data-table">
		<thead>
			<tr>
				<th>Email</th>
        		<th>Status</th>
			</tr>
		</thead>
	<tbody>
<?php
include('smtp/PHPMailerAutoload.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Projectdb";
$conn = new mysqli($servername, $username, $password, $dbname);
$date="2023-04-24";
$day = date("l", strtotime($date));
function smtp_mailer($to,$subject,$msg){
	//echo "Inside funtion smtp_mailer";
	//echo "<br>";
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "saipranayganta2003@gmail.com";
	$mail->Password = "lyxrqdusrgbpgfsw";
	$mail->SetFrom("saipranayganta2003@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->Send()){
		?>
		<tr>
			<td><?php echo $to;?></td> 
			<td><?php echo "Sent";?></td>
		</tr>
		<?php
		return "Sent Email Successfully";
	}else{
		echo $mail->ErrorInfo;
	}}
$list=array("Veg Biryani"=>120,"Chicken Biryani"=>150,"Veg Fried Rice"=>90,"Chicken Fried Rice"=>130,"Curd Rice"=>40,"Rice and Curries"=>80);

$query = "SELECT *FROM Update1 WHERE Order_date='$date'";		//EXCEPT SELECT Cid FROM Cancel where Cancel_date='$_POST[date]'
$result = $conn->query($query);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$query1 = "SELECT *FROM Register WHERE Cid='$row[Cid]'";	
				$result1 = $conn->query($query1);
				if ($result1->num_rows > 0) {
					while($row1 = $result1->fetch_assoc()) {
$e= $row1["Email"];
// echo $e;
// echo "<br>";
$b= "Hello " . $row1["Full_Name"] . "!<br>" . "We are happy to update you about the status of your today's
 dinner.<br>" . "<br>Your today's Order:  <b>" . $row["Item"] . "</b><br>" . "Cost of the Order  :  <b>₹" .
$list[$row["Item"]] . "</b><br>" . "Delivery Address   :  <b>" . $row1["Address1"] . "</b><br>" .
"<br>If you want to change your order Click on this link: http://localhost/project/login.php<br><br>" . 
"Thank you for choosing us!<br><br>Best Regards,<br><br>Sai Pranay Ganta<br>Customer Support Team
<br>Spicy Dinners<br>Contact numbers: +91-8766577573,+91-9876543531";

smtp_mailer($e,'Dinner Order',$b);
}}}}
$today = new DateTime($date);
$query2= "SELECT Cid FROM Orders EXCEPT SELECT Cid FROM Update1 WHERE Order_date='$date' EXCEPT SELECT Cid FROM Cancel WHERE Cancel_date='$date'";
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
				$query4 = "SELECT *FROM Register WHERE Cid='$row3[Cid]'";	
				$result4 = $conn->query($query4);
				if ($result4->num_rows > 0) {
					while($row4 = $result4->fetch_assoc()) {
				$email=$row4["Email"];
				$b= "Hello " . $row4["Full_Name"] . "!<br>" . "We are happy to update you about the status of your today's
 dinner.<br>" . "<br>Your today's Order:  <b>" . $row3[$day] . "</b><br>" . "Cost of the Order   :  <b>₹" .
$list[$row3[$day]] . "</b><br>" . "Delivery Address     :  <b>" . $row4["Address1"] . "</b><br>" .
"<br>If you want to change your order Click on this link: http://localhost/project/login.php<br><br>" . 
"Thank you for choosing us!<br><br>Best Regards,<br><br>Sai Pranay Ganta<br>Customer Support Team
<br>Spicy Dinners<br>Contact numbers: +91-8766577573,+91-9876543531";
smtp_mailer($email,'Dinner Order',$b);
			}}}}}}}
$sqlc="SELECT *FROM Orders";
$resultc= $conn->query($sqlc);
if ($resultc->num_rows > 0)
{
	while($rowc = $resultc->fetch_assoc())
	{
		$stc = new DateTime($rowc["Order_date"]);
			$intervalc = $stc->diff($today);
			$tc = $intervalc->days+1;
			if ($today<$stc){$tc=-($tc);}
			if ($today<$stc){$tc=-($tc);}
			if(($tc == $rowc["Duration"]*7) && $tc>=0)	
			{
				$sqlc1 = "SELECT *FROM Register WHERE Cid='$rowc[Cid]'";
				$resultc1 = $conn->query($sqlc1);
				if ($resultc1->num_rows > 0)
				{
					while($rowc1 = $resultc1->fetch_assoc())
					{
						$emailc = $rowc1["Email"];
				$bc = "Hello " . $rowc1["Full_Name"] . "," . "<br>" . 
				"We hope this message finds you well. We would like to remind you that today is the final day of your meal order for your selected period..
				As a valued member of our mess community, we appreciate your continued support. To ensure uninterrupted service, we kindly request you to renew your mess order before the end of the day. " . "<br>" . 
				"<br><b>Renew Your Mess Order by clicking on the link:</b> http://localhost/project/index.php<br><br>
				
				In case you have any questions or need assistance with the renewal process, please don't hesitate to reach out to our customer support team at saipranayganta@email.com or call [9876457689].<br><br>
				
				Thank you for being a part of our mess family. We look forward to serving you in the coming period.<br><br>
				
				Best regards,<br>
				Sai Pranay Ganta<br>
				Customer Support Team<br>
				Spicy Dinners<br>
				Contact Numbers: +91-8766577573,+91-9876543531";?></table>
				<br><br><br>
				<h3><center>Mess Period Ending Notifications Emails<center></h3><br>
				<table class="data-table">
				
		<thead>
			<tr>
				<th>Email</th>
        		<th>Status</th>
			</tr>
		</thead>
	<tbody>
				<?php
				smtp_mailer($emailc,'Mess Order Renewal',$bc);
					}
				}?>
				
				<?php
			}
	}
}
?>
<!-- <br><br><br><br><br><br><br><br><br><br> -->
		
  <!-- <a class="btn-content" href="admin.php">
    <span class="btn-title">Previous</span>
    <span class="icon-arrow">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a> -->
  </table>
  <!-- <br><br><br><br>
  <footer>
  <div class="btn-conteiner">
  <a class="btn-content" href="admin.php">
    <span class="icon-arrow">
        <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">    
		<path id="arrow-icon-one" d="M25.8456067,3.89485454 L22.0236851,0.139296592 C21.8291689,-0.0518420739 21.5173671,-0.0518571125 21.3228325,0.139262789 L0.308386621,20.7848311 C-0.0855800583,21.1718824 -0.0911862966,21.8050225 0.295865016,22.1989893 C0.299981204,22.2031791 0.304134322,22.2073326 0.308323823,22.2114492 L21.322902,42.8607841 C21.5174043,43.0519059 21.8291758,43.0519358 22.0237147,42.8608513 L25.8454814,39.1069479 C26.0424848,38.9134427 26.0453207,38.5968729 25.8518155,38.3998695 C25.8497107,38.3977268 25.8475868,38.395603 25.8454438,38.3934985 L8.00622106,21.8567812 C7.80919721,21.6632968 7.80632803,21.3467273 8.00081236,21.1497035 C8.00293525,21.1475418 8.00507769,21.1453995 8.00723948,21.1432767 L25.8464792,4.60825197 C26.0435131,4.41477773 26.0463987,4.09820839 25.8529244,3.90117456 C25.8508374,3.89904911 25.8487314,3.89694235 25.8466067,3.89485454 Z" fill="#FFFFFF"></path>
</g>
	</svg>
    </span>
    <span class="btn-title">Go to Admin Page</span>
</a>
</div>
</footer>
<br><br><br><br> -->
</body>
</html>