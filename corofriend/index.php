<?php
session_start();
require "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<style>
    .title,
    .information,
    .description {
        text-align: center;
    }

    /* For info card */
    #infoCard {
        position: relative;
        width: 500px;
        height: 500px;
        background-color: #B01D22;
        border-radius: 10px;
        color: #fff;
        margin-left: 6px;
        margin-right: 44px;
        margin-bottom: 50px;
    }

    /* Buat animating info card */
    /* Buat kotak merah */
    #infoCard::before {
        top: 20px;
        content: "Fun Fact !";
        position: absolute;
        right: -50px;
        opacity: 0;
        transition: 0.5s;
    }

    #infoCard:hover::before {
        right: 50%;
        transform: translate(50%, 0);
        opacity: 1;
    }

    /* End of funfact text */

    #infoCard::after {
        bottom: 20px;
        content: "End of Fun Fact";
        position: absolute;
        left: -50px;
        opacity: 0;
        transition: 0.5s;
    }

    #infoCard:hover::after {
        left: 50%;
        transform: translate(-50%, 0);
        opacity: 1;
    }

    /* Buat gambar korona */
    #infoCard .corona-img {
        transform: translate(0, -25%);
        opacity: 0.4;
        top: 20px;
        max-width: 350px;
        transition: 0.5s;
    }

    #infoCard:hover .corona-img {
        opacity: 0.1;
        transform: translate(0, -25%)scale(1.2);
    }

    /* Animasi konten */
    #infoCard .beforeHover {
        padding-top: 30px;
        bottom: 50px;
        opacity: 1;
        transition: 0.5s;
    }

    #infoCard:hover .beforeHover {
        opacity: 0;
    }

    #infoCard .afterHover {
        transform: translate(0, 500px);
        padding-top: 30px;
        bottom: 50px;
        opacity: 0;
        transition: 0.5s;
    }

    #infoCard:hover .afterHover {
        margin: 5px;
        top: 50%;
        transform: translate(0, 50%);
        opacity: 1;
    }

    #infoCard p {
        margin-top: 10px;
    }
</style>

<body>
    <div class="container">
        <div class="jumbotron">
            <div class="title">
                <h1>Corofriend</h1>
            </div>
            <div class="description">
                <p>Menyajikan informasi dan permainan ringan seputar pencegahan, pengetahuhan
                    dan penanganan seputar virus Corona.
                </p>
            </div>

        </div>
        <div class="container p-3">
            <div class="information">
                <div class="row">
                    <div id="infoCard">
                        <p class="beforeHover">Fun Fact About Corona no. 1 !</p>
                        <p class="afterHover">Corona is believed to be found in Wuhan at the first place. From there, it
                            went global until today</p>
                        <img src="pics/coronaPic.png" alt="Corona Cartoon" class="corona-img">
                    </div>

                    <div id="infoCard">
                        <p class="beforeHover">Fun Fact About Corona no. 2 !</p>
                        <p class="afterHover">The symptoms of corona could be seen after 7 days and varies between a
                            person and another</p>
                        <img src="pics/cough.png" alt="Cough Cartoon" class="corona-img">
                    </div>
                    <div id="infoCard">
                        <p class="beforeHover">Fun Fact About Corona no. 3 !</p>
                        <p class="afterHover">Corona could be severe to some people, but some don't even feel anything or in this case, they are called <b>carrier</b>.</p>
                        <img src="pics/healthy.png" alt="Healthy Cartoon" class="corona-img">
                    </div>
                    <div id="infoCard">
                        <p class="beforeHover">Fun Fact About Corona no. 4 !</p>
                        <p class="afterHover">Some of the efficient ways to prevent corona from spreading while going out are covering our face with face mask, washing hands, and social distancing</p>
                        <img src="pics/socialdistance.png" alt="Social Distancing Cartoon" class="corona-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require "footer.php";
?>
