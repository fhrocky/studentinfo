<?php


$connect = mysqli_connect("localhost", "root", "", "rocky");
if (isset($_POST['btnAdd'])) {

  $user_name = $_POST['name'];
  $user_email = $_POST['email'];
  $user_mobile = $_POST['mobile'];
  $user_password = $_POST['password'];

  $result = mysqli_query($connect, "UPDATE students SET name='$user_name',email='$user_email',password='$user_password' WHERE mobile='$user_mobile'");
  echo "Update Succesfull.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style1.css" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="first">
    <header>
      <a href="./signup.php">
        <p class="logo">Navbar</p>
      </a>
      <nav>
        <ul class="nav-links">
          <li><a href="./signup.php">Sign Up</a></li>
          <li><a href="./index.php">Login</a></li>
          <li><a href="./show.php">Show Data</a></li>
          <li><a href="./delete.php">Delete</a></li>
          <li><a href="./update.php">Update</a></li>
        </ul>
      </nav>
      <a href=""><button>Add student</button></a>
    </header>
  </div>
  <div class="sign-up-form">
    <form action="" class="std" method="POST">
      <fieldset>
        <legend>Student Info System</legend>
        <label class="std"> NAME:</label>
        <input type="text" name="name" placeholder="Enter Student Name " required />
        <label class="std"> Email:</label>
        <input type="email" name="email" placeholder="Your Email" />
        <label class="std"> Mobile No:</label>
        <input type="number" name="mobile" placeholder="Your Mobile" />
        <label class="std"> Passsword:</label>
        <input type="password" name="password" placeholder="Your Password" />
        <input type="submit" name="btnAdd" class="btn" class="signup-btn" value="Update" />
    </form>
    </fieldset>
  </div>
</body>

</html>