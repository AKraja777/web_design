<?php
include "db.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $userPassword = $_POST["password"];

    // Database connection
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sample";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$userPassword'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $conn->close();
        header("Location: page.php");
        exit();
    } else {
        echo "<script>alert('Invalid User');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 5;
    }

    .regform {
      text-align: center;
    }
  </style>

</head>
<body>
    <div class="regform">
        <h3>Log In</h3>
        <p>aefwrge sefesgdr sefswgerer gerg</p>
        <p>dfeawret fsrdtf</p>
        <form action="#" method="POST">
      <div class="input">
        <label class="textlabel" for="username"></label>
        <input type="text" name="username" placeholder="Username" class="form-control" required>
      </div>
      <div class="input">
        <label class="textlabel" for="password"></label>
        <input type="password" name="password" placeholder="Password" class="form-control"  required>
      </div>
      <div class="div">
        <a href="#">Forgot password?</a>
      </div>
      <div class="btn">
      <button type="submit" name="login" id="login">Login</button>
      </div>
      <div class="account-info">
        Don't have an account?
      </div>
    </form>
  </div>
</body>
</html>
