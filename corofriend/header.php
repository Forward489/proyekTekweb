<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .loginSystem {
            width: 9%;
            flex-direction: row;
            justify-content: right;
        }

        .separator {
            width: 70%;
        }

        #in {
            width: 100%;
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="quiz.php">Quiz</a>
                    <a class="nav-link" href="leaderboard.php">Leaderboard</a>
                </div>
                <div class="separator"></div>
                <div class="loginSystem">
                    <a class="nav-link" id="in" href="login.php">Log In</a>
                </div>
                <div class="loginSystem">
                    <a class="nav-link" id="in" href="registration.php">Register</a>
                </div>
                <div class="loginSystem">
                    <a class="nav-link" id="in" href="logout.php" onclick="return confirm('Are you sure you want to log out ?');">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>