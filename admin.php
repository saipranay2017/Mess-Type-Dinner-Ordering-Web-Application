<html>
    <head>
        <link rel="stylesheet" href="nav.css">
        <link rel="stylesheet" href="sendButton.css">
</head>
<style>
    
     body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  h1 {
    color: #333;
    text-align: center;
    padding: 20px;
    margin-top: 50px;
  }

  form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px auto;
    max-width: 400px;
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
  }

  input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  .form-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

      
        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            flex: 1;
        }
  
    </style>
    <header>
<div id="showcase">
        <header>
            <nav>
                <ul>
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="select_registration_table.php">Registred Members</a></li>
                    <li><a href="select_order_table.php">Mess Orders</a></li>
                    <li><a href="select_update_table.php">Updated Orders</a></li>
                    <li><a href="select_cancel_table.php">Cancelled Orders</a></li>
                    <!-- <li><a href="sendButton.php">Send emails</a></li> -->
                    <li><a href="#"></a></li>
                    <li><a href="#">Admin</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
</header>
</div><body>
<center style="color:black;font-size:32px"><b>Check Customer Orders</b></center>
<div class="form-container">
        <form action="orders.php" method="POST">
            <label for="Orders">Orders for a particular date</label>
            <div class="date-inputs">
                <input type="date" name="date">
            </div>
            <input type="submit" value="Submit">
        </form>
        <form action="count.php" method="POST">
            <label>Count of orders of each item separately:</label>
            <div class="date-inputs">
                <input type="date" name="date">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div><br><br>
    <center style="color:black;font-size:32px"><b>Send Emails</b></center>
  <form>
  <label>Send Order details to Customers: </label>
  <div align="center">
  <button class="bt" id="bt">
  <a href="email.php"><span class="msg" id="msg"></span>
    SEND</a>
</button></div>
</form>
</body>
</html>