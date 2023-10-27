<html>
    <head>
        <style>
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
            <link rel="stylesheet" href="nav.css">
</head>
    <body>
    <header>
<div id="showcase">
        <header>
            <nav>
                <ul>
                    <li><a href="order_home.php">Orders Home</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"><?php session_start(); echo "$_SESSION[user]"?></a></li>
                </ul>
            </nav>
</header>
<form action="insert_cancel.php" method="post"><br>
<label for="date"><p style="font-size:20px;color:blue;">Select the date when you want you cancel your order: </p></label>
<input type="date" id="date" name="date"><br><br>
    <a href="order_home.php"><input type="submit" value="Cancel"></a>
    </form>
</body>
</html>