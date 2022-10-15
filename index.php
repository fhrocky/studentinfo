<?php

$connect = mysqli_connect("localhost", "root", "", "rocky");
if (isset($_POST['login'])) {
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];
    $logged = true;

    $result = mysqli_query($connect, "SELECT * FROM students");
    while ($row = mysqli_fetch_assoc($result)) {
        $temp_email = $row['email'];
        $temp_pass = $row['password'];

        if ($temp_email == $user_email && $temp_pass == $user_pass) {
            echo "Login Successful";
            return 0;
        } else {
            $logged = false;
        }
    }

    if ($logged == false) {
        echo "Email OR Password Incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./style1.css">
    <title>Student Info</title>
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
    <form action="" class="std" method="POST">
        <fieldset>

            <label class="std"> Email:</label>
            <input type="email" name="email" placeholder="Your Email" />

            <label class="std"> Passsword:</label>
            <input type="password" name=password placeholder="Your Password" />
<input type="submit" class="btn" name="login" value="Log In" />
        </fieldset>
    </form>

</body>

</html>