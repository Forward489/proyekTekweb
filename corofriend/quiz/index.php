<!DOCTYPE html>
<html lang="en">
<?php 
session_start();

if (!isset($_SESSION["login"])) {
    $_SESSION["page"] = "quiz/index.php";
    header("Location: ../login.php");
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COROQUIZ</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="container">
        <div id="home" class="flex-center flex-column">
            <h1>COROQUIZ</h1>
            <a class="btn" href="game.php">Play</a>
            <a class="btn" href="highscores.php">High Scores</a>
            <a class="btn" href="../index.php">Corofriend Home</a>
        </div>
    </div>
</body>
</html>