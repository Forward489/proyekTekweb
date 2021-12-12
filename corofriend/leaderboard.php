<?php 
session_start();

if (!isset($_SESSION["login"])) {
    $_SESSION["page"] = "leaderboard.php";
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
</head>
<style>
    h1 {
        text-align: center;
    }
</style> 
<body>
    <?php require "header.php";?>
    <h1>LEADERBOARD PAGE</h1>
    <?php require "footer.php";?>
</body>
</html>
