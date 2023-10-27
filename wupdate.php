<html>
  <head>
  <style>
h3,h4{
  color:black;
}
h1 {
  text-align: center;
  color: #333333;
}

.menu {
  display: flex;
  justify-content: space-around;
  margin-top: 50px;
}

.day {
  background-color: #ffffff;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  color: #333333;
}

select {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  border: 1px solid #cccccc;
  border-radius: 4px;
  font-size: 16px;
  color: #333333;
}

option {
  color: #333333;
}

option:disabled {
  color: #999999;
}
</style>  
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="button.css">
</head>
  <header>
<div id="showcase">
        <header>
            <nav>
                <ul>
                    <li><a href="order_home.php">Orders Home</a></li>
                    <li><a href="wulist.php">List Orders</a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"><?php session_start(); echo "$_SESSION[user]"?></a></li>
                </ul>
            </nav>
</header><body><br>
  <form action="update_orders.php" method="post">
<h1>Weekly Menu</h1>
  <div class="menu">
    <div class="day">
      <h2>Sunday</h2>
      <select name="sun">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
    <div class="day">
      <h2>Monday</h2>
      <select name="mon">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
    <div class="day">
      <h2>Tuesday</h2>
      <select name="tue">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
    <div class="day">
      <h2>Wednesday</h2>
      <select name="wed">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div></div>
    <div class="menu">
    <div class="day">
      <h2>Thrusday</h2>
      <select name="thr">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
    <div class="day">
      <h2>Friday</h2>
      <select name="fri">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
    <div class="day">
      <h2>Saturday</h2>
      <select name="sat">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
  </div></div>
  <div align="center"><a href="update_orders.php"><button class="button1">Submit</button></a></div>
</form>
</body>
</html>