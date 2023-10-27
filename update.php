<html>
  <style>
body{
    font-family: sans-serif;
    color:white;
    margin:0;
    line-height: 1.6;
}
a{
    text-decoration: none;
    color:white;
}
/*div*/
#showcase{
    margin:0;
    padding: 0px 0px 0px 0px;
}
.container{
    margin-top: 30px;
    text-align: center;
}
.para{
    text-align: center;
}
nav{
    margin:0;
    padding:0;
    height: 50px;
    width: 100%;
    background-color: gray;
    color:white;
}
nav ul{
    padding:0;
    margin:0;

}
nav li{
    display: inline;
    float:left;
}
nav a {
    display: inline-block;
    width: 150px;
    text-align: center;
    text-decoration: none;
    padding: 10px 0;
}
/*pseudo classes*/
nav li:hover{
    background-color: #444;
}
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
<link rel="stylesheet" href="button.css">
  <header>
<div id="showcase">
        <header>
            <nav>
                <ul>
                    <li><a href="order_home.php">Orders Home</a></li>
                    <li><a href="ulist.php">List Orders</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"></a></li><li><a href="#"></a></li>
                    <li><a href="#"><?php session_start(); echo "$_SESSION[user]"?></a></li>
                </ul>
            </nav>
</header><body><br>
  <form action="insert_update.php" method="POST">
    <label style="color:black">Enter date:</label>
    <input type="date" name="date"><br><br><Br><Br>
<h1>Weekly Menu</h1>
  <div class="menu">
    <div class="day">
      <select name="item">
        <option selected disabled>Select a food item</option>
        <option>Veg Biryani</option>
        <option>Chicken Biryani</option>
        <option>Veg Fried Rice</option>
        <option>Chicken Fried Rice</option>
        <option>Rice and Curries</option>
        <option>Curd Rice</option>
      </select>
    </div>
    </div><br><br><br><br>
    <div align="center"><a href="insert_update.php"><button class="button1">Submit</button></a></div>
</form>
</body>
</html>