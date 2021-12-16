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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <style>
        .nav-item > a{
            font-family: 'Hammersmith One', sans-serif;
            color:#ECB365!important;
        }
        .navbar-brand{
            font-family: 'Hammersmith One', sans-serif;
            font-weight: bold;
            color:#ECB365!important;
        }
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(236,179,101, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        .custom-toggler {
            border-color: #ECB365!important;
        } 
        .custom-toggler:hover {
            background-color: #ECB365;
        } 
        .custom-toggler:hover .navbar-toggler-icon{
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(4,28,50, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        .nav-item > a:hover {
            color: #041C32!important;
            background-color: #ECB365;
        }
        .sticky-top{
            background-color: #04293A;
        }
        .sticky-top.scrolled {
            background-color: #041C32 !important;
            transition: background-color 200ms linear;
        }
    </style>
        <!-- script scroll -->
<script>
        $(function () {
        $(document).scroll(function () {
            var $nav = $(".sticky-top");
            var $nav2 = $(".carousel-item");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav2.height()-$nav.height());
        });
        });
</script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="hallOfFame.php">Corofriend</a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#myNavigation" aria-controls="myNavigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavigation">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="quiz/index.php">Quiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="quiz/highscores.php">Leaderboard</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION["login"])) : ?>
                        <li class="nav-item"><a class="nav-link">Hi, <?= $_SESSION["user"]; ?>!</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php" onclick="return confirm('Are you sure you want to log out ?');">Log Out</a></li>
                    <li class="nav-item"><a class="nav-link" href="changePassword.php?username=<?= $_SESSION["user"]; ?>">Change Password</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="registration.php">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
