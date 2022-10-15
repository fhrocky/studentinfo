<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style1.css">
    <title>Student info System</title>
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
    </div><br><br>
    <div>
        <form action="" method="POST">
            <input type="text" name="mobile" placeholder="Please enter Mobile No:">

            <input type="submit" class="btn" name="btnAdd" value="SUBMIT"><br><br>
        </form>
    </div>
    <table>
        <tr>
            <th>ID </th>
            <th>Name </th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Password</th>

        </tr>

        <?php
        $connect = mysqli_connect("localhost", "root", "", "rocky");
        $result = mysqli_query($connect, "SELECT * FROM students");
        while ($std = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $std['id'] ?></td>
                <td><?php echo $std['name'] ?></td>
                <td><?php echo $std['email'] ?> </td>
                <td><?php echo $std['mobile'] ?> </td>
                <td><?php echo $std['password'] ?> </td>

            </tr>

        <?php } ?>



    </table>

</body>

</html>

<?php
if (isset($_POST['btnAdd'])) {


    $user_mobile = $_POST['mobile'];

    $result = mysqli_query($connect, "DELETE FROM students WHERE mobile='$user_mobile'");
    header("location: ./delete.php");
}


?>

</table>
</body>

</html>