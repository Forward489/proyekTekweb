<?php
session_start();
require "functions.php";
if (isset($_POST["regist"])) {
    if (registration($_POST) > 0) {
        echo "<script>
        alert('Registration Successful !')
        </script>";
        $_SESSION["login"] = true;
        $_SESSION["user"] = $_POST["username"];
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
                <label class="font-color" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label class="font-color" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="font-color" for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="regist" class="btn btn-success" id="done">Submit</button>
        </form>
    </div>
</body>

</html>
