<!DOCTYPE html>
<html>
<head>
<style>
	body 
		{
		font-family: Arial, Helvetica, sans-serif;
		margin-left:25%;
		margin-right:25%;
		border: 1px solid #000000;
		margin-bottom: 5px;
		padding: 0px 15px 0 15px;
		}
	input[type=text], input[type=password], textarea
		{
		width: 97%;
		padding: 10px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #F5F5F5;
		}
	hr 
		{
		border: 1px solid #e6e6e6;
		margin-bottom: 5px;
		}
	.registerbutton
		{
		background-color: #29a329;
		color: white;
		padding: 15px 20px;
		margin: 10px 0px;
		border: none;
		cursor: pointer;
		width: 100%;
		text:bold;
		}
	a {
  color:white;
  text-decoration: none;
}
</style>
</head>
<body>
	<form action="insert_registration.php" method="POST">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		
		<label for="name"><b>Name</b></label>
		<input type="text" placeholder="Enter Your Name" name="name" required><br>
		
		<label for="number"><b>Contact No.</b></label>
		<input type="text" placeholder="Enter Your Contact No." name="number" required><br>
		
		<label for="email"><b>Email</b></label> 
		<input type="text" placeholder="Enter Your E-mail" name="email" required><br>

		<label for="address"><b>Address:</b></label>
		<textarea id="address" placeholder="Enter Your Residential Address" name="address" rows="4" cols="50" name="address" required></textarea>

		<label for="pwd"><b>Password</b></label>
		<input type="password" placeholder="Enter Your Password" name="psw" required><br>

		<label for="psw-repeat"><b>Repeat Password</b></label>
		<input type="password" placeholder="Repeat Your Password" name="psw-repeat" required><br>
		<hr>
		<p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy.</a></p>

		<a href="login.php"><button type="submit" class="registerbutton">Register</button></a>	
		<p>Already have an account? <a href="login.php" style="color:blue">Sign in</a>.</p>
		
	</form>


</body>
</html>