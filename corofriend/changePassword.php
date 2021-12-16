<?php
session_start();
require "functions.php";

$username = $_GET['username'];

$change_password = query("SELECT * FROM user WHERE username = '$username'");

if (isset($_POST["submit"])) {
    if (changePass($_POST) > 0) {
        echo "<script>
        alert('Password and or username changed succesfully !');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Failed to change password and or username');
        document.location.href = 'changePassword.php';</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <?php require "header.php"; ?>
    <style>
        #done {
            margin-left: 45%;
        }
        body{
        font-family: 'Hammersmith One', sans-serif;
        background-color:#041C32;
        -webkit-font-smoothing: antialiased;
        }
        .font-color {
        color: #ECB365;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="old_username" id="old_username" class="form-control" placeholder="old_username" value="<?= $username ?>">
            </div>
            <div class="form-group">
                <label class="font-color" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= $username ?>">
            </div>
            <div class="form-group">
                <label class="font-color" for="password">Old Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="font-color" for="password_new">New Password</label>
                <input type="password" name="password_new" id="password_new" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="font-color" for="password2">Confirm New Password</label>
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn btn-success" id="done">Submit</button>
        </form>
    </div>
</body>

</html>