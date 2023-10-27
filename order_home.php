<html>
        <head>
                <style>
                        body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-image: url("background.png");
  			background-size: cover;
  			background-repeat: no-repeat;
  			background-position: center center; 
		}
		
		th, td {
    border: 0px solid #ddd;
    padding: 1.2px;
    text-align: center;
	
  }
                </style>
    <link rel="stylesheet" href="button.css">    
	</head>
    <body>
        <?php session_start(); ?>
		<div class="container">
		<table width="100%">
		<tr>	
			<th></th>
			<th><h1 style="font-family: 'Helvetica', sans-serif; color: #3498db; text-align: center; background-color: #f2f2f2; padding: 20px;">Dinner Orders</h1></th>
			<th></th>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
		<div class="button-container">
                <td><a href="new.php"><button class="button1">New Order</button></a></td>
                <td><a href="daily.php"><button class="button1">Daily Order</button></a></td>
                <td><a href="cancel.php"><button class="button1">Repeat Order</button></a></td>
		</div>
		</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr>
	<!-- </div>
	<div class="container"> -->
		<tr>
		<div class="button-container">
				<td><a href="track.php"><button class="button2">Track Your Order</button></a></td>
                <td><a href="update.php"><button class="button2">Update Daily Order</button></a></td>
                <td><a href="wupdate.php"><button class="button2">Update Weekly Order</button></a></td>
		</div>
	</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<!-- </div>
	<div class="container"> -->
		<tr>
		<div class="button-container">
				<td><a href="feedback.html"><button class="button3">Feedback</button></a></td>
                <td><a href="cancel.php"><button class="button3">Cancel Daily Order</button></a></td>
                <td><a href="wcancel.php"><button class="button3">Cancel Weekly Order</button></a></td>
		</div> 
	</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<!-- </div> 
        <div class="container"> -->
			<tr>
		<div class="button-container">
				<td></td>
                <td align="center"><a href="logout.php"><button class="button5">Logout</button></a></td>
				<td></td>
		</div>
	</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	</table>
	</div> 
</body>
</html>