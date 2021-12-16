<?php
session_start();
require "functions.php";
if (!isset($_SESSION["login"])) {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $valid = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($valid) === 1) {
            $row = mysqli_fetch_assoc($valid);
            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION["user"] = $username;
                if (isset($_SESSION["page"])) {
                    header("Location: ".$_SESSION["page"]);
                }
                else {
                    header("Location: index.php");
                }
                exit;
            }
        }
        $not_valid = true;
    }
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php require "header.php"; ?>
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
    body{
        font-family: 'Hammersmith One', sans-serif;
        background-color:#041C32;
        -webkit-font-smoothing: antialiased;
    }
    .font-color {
        color: #ECB365;
    }
</style>

<body>
    <div class="container">
        <?php
        if (isset($not_valid)) :
        ?>
            <p class="loginError">Username / password is not correct</p>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label class="font-color" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label class="font-color" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn btn-success" id="done">Submit</button>
            <small id="registerInfo" class="form-text text-muted">Doesn't have an account yet ? <a href="registration.php"> Register here !</a></small>
        </form>
    </div>
</body>

</html>
