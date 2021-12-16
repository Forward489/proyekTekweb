<!DOCTYPE html>
<html lang="en">
<?php 
session_start();

if (!isset($_SESSION["login"])) {
    $_SESSION["page"] = "quiz/highscores.php";
    header("Location: ../login.php");
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Scores</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="highscores.css">
</head>
<body>
    <div class="container">
        <div id="highScores" class="flex-center flex-column">
            <h1 id="finalScore">High Scores</h1>
            <ul id="highScoresList"></ul>
            <a class="btn" href="index.php">Back to Menu</a>
            <a class="btn" href="../index.php">Corofriend Home</a>
        </div>
    </div>
    <script src = "highscores.js"></script>
</body>
</html>