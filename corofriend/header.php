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
            color:#ECB365!important;
        }
        .navbar-brand{
            color:#ECB365!important;
        }
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(236,179,101, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        .custom-toggler.navbar-toggler {
            border-color: #ECB365!important;
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
            $nav.toggleClass('scrolled', $(this).scrollTop() > 500);
        });
        });
</script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Corofriend</a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#myNavigation" aria-controls="myNavigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavigation">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="quiz.php">Quiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="leaderboard.php">Leaderboard</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION["login"])) : ?>
                        <li class="nav-item"><a class="nav-link" href="index.php">Hello, <?= $_SESSION["user"]; ?></a></li>
                    <?php endif; ?>
                    <?php
                        if(isset($_SESSION["login"])){ 
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php" onclick="return confirm(\'Are you sure you want to log out ?\');">Log Out</a></li>';
                        }
                        else{ 
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="registration.php">Register</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
