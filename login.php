<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect('localhost', 'root', '', 'maindb');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "LOGIN SUCCESSFUL!";
    } else {
        echo "INVALID EMAIL OR PASSWORD!";
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container2">
    <h1>Login</h1>
    <form id="registrationForm" method="POST">
      <div class="subcontainer">

        <!--Email-->
        <div id="email_login">
          <h3>Email</h3>
          <input type="email" name="email" required>
          <label for="email">example@example.com</label>
        </div>

        <!--Password-->
        <div id="password_login">
          <h3>Password</h3>
          <input type="password" name="password" required>
          <label for="password">Password</label>
        </div>
      </div>
 
      <!--Submit-->
      <div id="submit">
        <input type="submit" value="Submit">
      </div>

      <p id="signup">Don't have an account? <a href="index.html">Register here.</a></p>
    </form>
  </div> 
  <script src="script.js"></script>
</body>
</html>