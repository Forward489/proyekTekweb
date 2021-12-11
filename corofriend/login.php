<?php
session_start();
require "functions.php";
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $valid = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($valid) === 1) {
        $row = mysqli_fetch_assoc($valid);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            $_SESSION["login"] = true;
            exit;
        }
    }
    $not_valid = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .loginError {
        color: red;
        font-style: italic;
    }

    #registerInfo {
        margin-top: 20px;
        text-align: center;
    }

    #done {
        margin-left: 45%;
    }
</style>

<body>
    <?php require "header.php"; ?>
    <div class="container">
        <?php
        if (isset($not_valid)) :
        ?>
            <p class="loginError">Username / password is not correct</p>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn btn-success" id="done">Submit</button>
            <small id="registerInfo" class="form-text text-muted">Doesn't have an account yet ? <a href="registration.php"> Register here !</a></small>
        </form>
    </div>
</body>

</html>