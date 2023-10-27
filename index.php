<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dinner Orders</title>
    <style>
    body {
			font-family: Arial, sans-serif;
			background-color: #f8f8f8;
			margin: 0;
			padding: 0;
}
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		
		h1 {
			font-size: 36px;
			margin: 0;
		}
		
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}
		
		.slider-container {
			position: relative;
			height: 400px;
			overflow: hidden;
			margin-bottom: 20px;
		}
		
		.slider {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			animation: slide 20s infinite;
		}
		
		.slide {
			flex-shrink: 0;
			width: 100%;
			height: 100%;
		}
		
		.slide img {
			max-width: 100%;
			height: auto;
			object-fit: cover;
			object-position: center;
		}
		
		@keyframes slide {
			0% {
				transform: translateX(0%);
			}
			25% {
				transform: translateX(0%);
			}
			30% {
				transform: translateX(-100%);
			}
			55% {
				transform: translateX(-100%);
			}
			60% {
				transform: translateX(-200%);
			}
			85% {
				transform: translateX(-200%);
			}
			90% {
				transform: translateX(-300%);
			}
			100% {
				transform: translateX(-300%);
			}
		}
p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 20px;
		}
.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}
nav ul li {
  margin-right: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}
.image-container {
			text-align: center;
			margin-bottom: 2px;
		}
		img {
			max-width: 100%;
			height: auto;
		}
    .slider-container {
			position: relative;
			height:350px;
			overflow: hidden;
			margin-bottom: 2px;
		}
		
		.slider {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: flex;
			animation: slide 10s infinite;
		}
		
		.slide {
			flex-shrink: 0;
			width: 100%;
			height: 100%;
		}
		
		.slide img {
			max-width: 100%;
			height: 350px;
			object-fit: cover;
			object-position: center;
		}
		l{
			padding: 40px 40px 40px 830px;
		}
	
		footer {
  background-color: black;
  color: white;
  bottom: 0;
  width: 100vw;
  font-size: 16px;
}
footer * {
  box-sizing: border-box;
  border: none;
  outline: none;
}

    </style>
<link rel="stylesheet" href="indexfooter.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="admin_login.php">Admin_Login</a></li>
        </ul>
      </nav>
    </header>
	<br>
    <h1 style="color:Brown;"><center>Spicy Dinners</center></h1>
	<l><b></b></l>
<div class="container">
		<div class="slider-container">
			<div class="slider">
				<div class="slide"><img src="rice.jpg" alt="Image 1"></div>
				<div class="slide"><img src="nonvegfriedrice.jpg" alt="Image 2"></div>
				<div class="slide"><img src="nonvegbiryani.jpg" alt="Image 3"></div>
				<div class="slide"><img src="vegbiryani.jpg" alt="Image 4"></div>
				<div class="slide"><img src="vegfriedrice.jpg" alt="Image 5"></div>
			</div>
		</div>
  </div>
  <div class="container">
  <marquee><p style="color:blue; font-size: 20px;">🍽️ Introducing Spicy Dinners: Your Evening Rescuer!<br></p></marquee>
<p style="color:red; font-size: 20px;">🕒 Long Day? Zero Energy? Order Dinner From Our Website!<br></p>

<!-- <p style="color:green; font-size: 20px;">Are those post-work hours leaving you utterly drained, making the thought of cooking dinner feel like climbing a mountain? Relax, because Spicy Dinners has your back! We specialize in delivering delectable meals of your choice, right to your doorstep.</p> -->

<p style="color:red; font-size: 20px;">🚀 Seamless and Super Simple!<br></p>

<!-- <p style="color:green; font-size: 20px;">Gone are the days of dreading dinner prep. Our user-friendly process lets you choose your dream meals effortlessly. Just register with us, pick your preferred dishes for different days of the week, and select how many weeks you'd like. It's a breeze!</p> -->

<!-- <p style="color:red; font-size: 20px;">🥘 Your Desires, Our Delights!<br></p> -->

<!-- <p style="color:green; font-size: 20px;">From lip-smacking delicacies to wholesome comfort food, our menu caters to your every craving. Asian zest, European elegance, or American classics – we've got it all. Customize your meals to suit your taste buds and never settle for less.</p> -->

<p style="color:red; font-size: 20px;">🛍️ Convenience at Your Doorstep!<br></p>

<!-- <p style="color:green; font-size: 20px;">Imagine coming home to a scrumptious meal waiting for you. With Spicy Dinners, that's your reality! Once you're on board, your dinner schedule is sorted. No fuss, no hassle – just pure indulgence.</p> -->

<!-- <p style="color:red; font-size: 20px;">🎉 Embrace the Ease, Embrace the Flavor!<br></p> -->

<!-- <p style="color:green; font-size: 20px;">Register now and let Spicy Dinners take care of your dinner dilemmas. It's time to relish your evenings, stress-free! Say goodbye to exhaustion and hello to exquisite dining experiences, all at the click of a button. -->

<p style="color:green; font-size: 20px;">Your evenings are about to get a whole lot tastier. Spicy Dinners – Where Every Bite is a Delight!
<br><br> <b>We have the following items :-</b></p>
		<ul style="list-style-type: none;margin: 0;padding: 0;">
		<b><p style="color:Brown; font-size: 20px;">🌱 Savor the Veggie Symphony 🌱</p></b>
			<li style="color: darkblue ; margin-bottom: 10px; font-size: 20px; line-height: 1.5;">- <b>Veg Fried Rice: </b>Crisp Veg Delight: Wok-fired Perfection with Every Bite!</li>
			<b><p style="color:Brown; font-size: 20px;">🍗 Dive into Poultry Paradise 🍗</p></b>
			<li style="color: darkblue; margin-bottom: 10px; font-size: 20px; line-height: 1.5;">- <b>Chicken Biryani: </b>A Majesty of Aromas and Tender Meat!</li>
			<li style="color: darkblue; margin-bottom: 10px; font-size: 20px; line-height: 1.5;">- <b>Chicken and Egg Fried Rice: </b>Chicken and Egg Unite in Every Forkful!</li>
			<b><p style="color:Brown; font-size: 20px;">🍚Healthy Suppers That Satisfy🍛</p></b>
			<li style="color: darkblue; margin-bottom: 10px; font-size: 20px; line-height: 1.5;">- <b>Rice and Curries: </b>Curry Carnival with Rice: A Palette of Flavors on Your Plate</li>
			<b><p style="color:Brown; font-size: 20px;">🥣 Creamy Comfort Classics 🥣</p></b>
			<li style="color: darkblue; margin-bottom: 10px; font-size: 20px; line-height: 1.5;">- <b>Curd Rice: </b>Creamy Comfort Bliss: Curd Rice that Hugs Your Taste Buds!"</li>
		</ul>

<p style="color:black; font-size: 20px;"><b>Note:- </b><i>Dinner is not only a ritual of nourishment but also a pivotal moment in maintaining a balanced and healthy lifestyle. The importance of having dinner goes beyond satisfying hunger.</p>
		<p style="color:black; font-size: 20px;">It plays a crucial role in maintaining<b> Nutritional Balance, Energy Levels, Metabolism, Brain Function, Blood Sugar Control, Mindful Eating </b> as it is the one meal during which we can truly eat in peace.</p></i>
	</i>
</div>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

  </body>
</html>
