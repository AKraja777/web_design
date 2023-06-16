<?php
include "db.php";

// Database connection
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "sample";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details from the database
$sql = "SELECT username, password, email, mobile FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row["username"];
    $password = $row["password"];
    $email = $row["email"];
    $mobile = $row["mobile"];
} else {
    // Handle the case when no user details are found
    $username = "";
    $password = "";
    $email = "";
    $mobile = "";
}

$conn->close();
?>
<?php
include "db.php";


if (isset($_POST["update"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    // Database connection
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sample";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE users SET username = '$username', mobile = '$mobile', email = '$email', password = '$password'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User details updated successfully');</script>";
    } else {
        echo "<script>alert('Failed to update user details');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form</title>
  
  <style>
    .regform {
      width: 290px;
      height: 390px;
      margin: 100px auto;
      padding: 10px 20px 30px;
      background-color: white;
      font-size: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(9, 7, 7, 0.437);
    }
    
    .regform h1 {
      text-align: center;
      color: black;
      font-size: 24px;
      margin-top: 10px;
    }
    
    .input label {
      display: block;
      font-size: 18px;
      margin-bottom: 5px;
    }
    
    .input input {
      width: 100%;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      padding: 10px;
      box-sizing: border-box;
      margin-bottom: 15px;
      background-color: rgba(0, 0, 0, 0.068);
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }
    
    .input input:focus {
      background-color: lightblue;
    }
    
    .btn {
      text-align: center;
      margin-bottom:10px;
    }
    
    button {
      width: 100%;
      background-color: blue;
      color: white;
      cursor: pointer;
      font-size: 15px;
      font-weight: bold;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      border: none;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="regform">
    <h1>Update Form</h1>
    <div class="container mt-5">
      <form id="updateForm" action="#" method="post">
        <div class="input">
          <label class="textlabel" for="username"></label>
          <input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>" required>
        </div>
        <div class="input">
          <label class="textlabel" for="password"></label>
          <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>" required>
        </div>
        <div class="input">
          <label class="textlabel" for="email"></label>
          <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>" required>
        </div>
        <div class="input">
          <label class="textlabel" for="mobile"></label>
          <input type="text" name="mobile" placeholder="Mobile" class="form-control" value="<?php echo $mobile; ?>" required>
        </div>
        <div class="btn">
          <button type="submit" name="update">Update</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
