<?php
session_start();
require "functions.php";
if (isset($_POST["regist"])) {
    if (registration($_POST) > 0) {
        echo "<script>
        alert('Registration Successful !')
        </script>";
        $_SESSION["login"] = true;
        $_SESSION["user"] = $username;
        header("Location: index.php");
    } else {
        echo mysqli_error($conn);
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
    <style>
        #done {
            margin-left: 45%;
        }
    </style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <?php require "header.php"; ?>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="regist" class="btn btn-success" id="done">Submit</button>
        </form>
    </div>
</body>

</html>
