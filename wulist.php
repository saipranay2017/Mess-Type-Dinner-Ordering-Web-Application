<!DOCTYPE html>
<html lang="en">
<head>
<style>
     * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .box {
      width: calc(33.33% - 20px);
      margin-bottom: 40px;
      padding: 20px;
      background-color: #f8f8f8;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      text-align: center;
    }

    .box img {
      max-width: 100%;
      margin-bottom: 10px;
      width: fit-content;
      height: fit-content;
    }

    .box h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .box p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    @media screen and (max-width: 768px) {
      .box {
        width: calc(50% - 20px);
      }
    }

    @media screen and (max-width: 480px) {
      .box {
        width: 100%;
      }
    }
h3,h4{
  color:black;
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
                    <li><a href="wupdate.php">Update Order</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#"><?php session_start(); echo "$_SESSION[user]"?></a></li>
                </ul>
            </nav>
</header>
  <div class="container">
    <div class="box">
      <img src="vegbiryani.jpg" alt="Image 1">
      <h3>Veg Biryani</h3>
      <h4>₹120</h4>
    </div>
    <div class="box">
      <img src="nonvegbiryani.jpg" alt="Image 2">
      <h3>Chicken Biryani</h3>
      <h4>₹150</h4>
    </div>
    <div class="box">
      <img src="vegfriedrice.jpg" alt="Image 3">
      <h3>Veg Fried Rice</h3>
      <h4>₹90</h4>
    </div>
    <div class="box">
      <img src="nonvegfriedrice.jpg" alt="Image 4">
      <h3>Chicken Fried Rice</h3>
      <h4>₹130</h4>
    </div>
    <div class="box">
      <img src="curd.jpg" alt="Image 5">
      <h3>Curd Rice</h3>
      <h4>₹40</h4>
    </div>
    <div class="box">
      <img src="rice.jpg" alt="Image 6">
      <h3>Rice and Curries </h3>
      <h4>₹80</h4>
    </div>
  </div>
  </form>
</body>
</html>