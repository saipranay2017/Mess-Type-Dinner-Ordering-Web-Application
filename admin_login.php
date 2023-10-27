<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.login-container {
  width: 400px;
  margin: 100px auto;
  padding: 20px;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
}

button[type="submit"] {
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

a{
  color:black;
  text-decoration:none;
}
button[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
  </head>
  <body>
    <!-- <script>
        const form = document.querySelector('form');
const loginButton = document.querySelector('#login-button');

loginButton.addEventListener('click', (event) => {
  event.preventDefault();
  const username = form.elements.username.value;
  const password = form.elements.password.value;
  if (username === 'example' && password === 'password') {
    alert('Login successfull');
    form.reset();
  } else {
    alert('Invalid username or password.');
  }
});
 </script> -->
    <div class="login-container">
      <h1>Admin Login</h1>
      <form action="admin_verify.php" method="POST">
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="1" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your Password" name="2" required>

        <button type="submit" id="login-button"><a href="admin.verify">Login</a></button>
      </form>
    </div>
  </body>
</html>