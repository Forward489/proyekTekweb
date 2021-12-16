<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corofriend</title>
</head>
<?php
session_start();
require "header.php";
?>
<style>
    html{
        scroll-behavior:smooth;
    }

    .container .box {
        width: 500px;
        height: 600px;
        line-height: 1.5;
        color: #fff;
        display: inline-flex;
        border-radius: 8px;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-right: 30px;
        margin-left: 30px;
        transition: all .5s; 
    }

    .box {
        background-image: url("pics/card-image01.jpg");
        width: 500px;
        height: 600px;
        background-size: cover;
        background-repeat: no-repeat;
        box-shadow: 0 10px 20px rgba(0,0,0,.7);
        border-radius: 8px;
    }
    @media screen and (max-width:1000px) {
        .container .box{
            width: 350px;
            height: 450px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top:20px;
            margin-bottom:20px;
        }
    }

    .two {
        background-image: url("pics/card-image02.jpg");
    }
    
    .three {
        background-image: url("pics/card-image03.jpg");
    }

    .four {
        background-image: url("pics/card-image04.jpg");
    }

    .box h1 {
        font-size: 20px;
    }

    .box p{
        font-size: 12px;
    }

    .box .btn {
        outline: none;
        border: none;
        padding: 5px 10px;
        background: transparent;
        cursor: pointer;
        color: #fff;
        margin: 10px 0 20px 0;
        border: 1px solid #fff;
        transition: all .5s;
    }

    .box .btn:hover {
        padding: 5px 20px;
    }

    .text {
        background-color: rgba(0,0,0,.6);
        opacity: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        padding: 0 10px;
        text-align: center;
        border-radius: 8px;
        transition: all .5s;
    }

    .text:hover {
        opacity: 1;
    }

    .box:hover {
        transform: translateY(20px);
    }

    .jumbotron {
        background-color: #04293A;
        background-size: cover;
    }

    .font-color {
        color: #ECB365;
    }

    .btn-custom{
        background-color: #ECB365;
        color: #041C32;
        border-color: #041C32;
    }

    .btn-custom:hover, .btn-custom:focus, .btn-custom:active, .btn-custom.active, .open .dropdown-toggle.btn-custom{
        background-color: #04293A;
        color: #ECB365;
        border-color: #ECB365;
    }

    body{
        font-family: 'Hammersmith One', sans-serif;
        background-color:#041C32;
        -webkit-font-smoothing: antialiased;
        -webkit-animation: fadeIn linear 2s;
        -moz-animation: fadeIn linear 2s;
        -o-animation: fadeIn linear 2s;
        -ms-animation: fadeIn linear 2s;
    }

    .tag {
    opacity: 0;
    transform: translate(0, 10vh);
    transition: all 2s;
    }

    .tag.visible {
    opacity: 1;
    transform: translate(0, 0);
    }


    @keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-moz-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-webkit-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-o-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-ms-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }
</style>

<script>
$(document).on("scroll", function() {
  var pageTop = $(".carousel-item").height();
  var pageBottom = pageTop + $(window).height();
  var tags = $(".tag");

  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i];

    if ($(tag).position().top < pageBottom) {
      $(tag).addClass("visible");
    } else {
      $(tag).removeClass("visible");
    }
  }
});
</script>

<body>
    <div id="carouselJumbotron" class="carousel slide carousel-fade" data-ride="carousel" data-touch="true">
        <ol class="carousel-indicators">
            <li data-target="#carouselJumbotron" data-slide-to="0" class="active"></li>
            <li data-target="#carouselJumbotron" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="jumbotron">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-8" style="margin-bottom:10px;">
                                <h1 class="display-4 font-color">Corofriend</h1>
                                <p class="lead font-color">Menyajikan informasi dan permainan ringan seputar pencegahan, pengetahuhan dan penanganan seputar virus Corona.</p>
                                <?php if (isset($_SESSION["login"])) : ?>
                                    <hr class="my-4" style="border-color: #ECB365;">
                                    <p class="lead font-color">Hello, <?= $_SESSION["user"]; ?>!</p>
                                <?php else : ?>
                                    <a class="btn btn-custom btn-lg" href="login.php" role="button" style="font-family: \'Hammersmith One\', sans-serif;">Get Started</a>;
                                <?php endif;?>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <img class="img-fluid" src="pics/jumbotron-pic.png" style="opacity:0.7;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-10 col-sm-6 col-md-6" style="margin-bottom:10px;">
                                <h1 class="display-4 font-color">Play Quiz now!</h1>
                                <a class="btn btn-custom btn-lg" href="quiz/index.php" role="button" style="font-family: \'Hammersmith One\', sans-serif;">Go to Quiz</a>
                            </div>
                            <figure class="col-xs-8 col-md-6 inline-block">
                                <a href="quiz/index.php">
                                    <img class="img-fluid" src="pics/jumbotron-pic2.png" style="opacity:0.7; border: 5px solid #555;">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselJumbotron" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselJumbotron" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <div class="container" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; position: relative; text-align:center;">
            <div class="tag row">
                <div class="box">
                    <div class="text">
                        <h1>Pandemi Covid-19</h1>
                        <p>Wabah Covid-19 pertama kali dideteksi di Kota Wuhan, Hubei, Tiongkok pada tanggal 31 Desember 2019, dan ditetapkan sebagai pandemi oleh Organisasi Kesehatan Dunia (WHO) pada tanggal 11 Maret 2020.</p>
                        <button class="btn" onclick=" window.open('https://id.wikipedia.org/wiki/Pandemi_Covid-19', '_blank'); return false;" type="button">Read</button>
                    </div>
                </div>
                <div class="box two">
                    <div class="text">
                        <h1>Vaksin Covid-19 di Indonesia</h1>
                        <p>Jokowi menjadi orang pertama di Indonesia yang mendapat suntikan vaksin Covid-19 pada tanggal 13 Januari 2020.</p>
                        <button class="btn" onclick=" window.open('https://en.wikipedia.org/wiki/COVID-19_vaccination_in_Indonesia', '_blank'); return false;" type="button">Read</button>
                    </div>
                </div>
                <div class="box three">
                    <div class="text">
                        <h1>Protokol Kesehatan 5 M</h1>
                        <p>Protokol kesehatan 5 M merupakan langkah yang diambil saat ini untuk mencegah penularan Covid-19 di Indonesia, yang dimana 5 M terdiri dari Mencuci tangan, Memakai Masker, Menjaga jarak, Menjauhi kerumunan, Mengurangi mobilitas.</p>
                        <button class="btn" onclick=" window.open('https://www.halodoc.com/artikel/mengenal-protokol-kesehatan-5m-untuk-cegah-covid-19', '_blank'); return false;" type="button">Read</button>
                    </div>
                </div>
                <div class="box four">
                    <div class="text">
                        <h1>PPKM</h1>
                        <p>Pemberlakuan Pembatasan Kegiatan Masyarakat (disingkat dengan PPKM) adalah kebijakan Pemerintah Indonesia sejak awal tahun 2021 untuk menangani pandemi Covid-19 di Indonesia. PPKM berlangsung di beberapa wilayah yang menjadi titik penyebaran infeksi Covid-19, yakni di Pulau Jawa dan Bali.</p>
                        <button class="btn" onclick=" window.open('https://id.wikipedia.org/wiki/Pemberlakuan_pembatasan_kegiatan_masyarakat_di_Indonesia', '_blank'); return false;" type="button">Read</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
<script>
  kofiWidgetOverlay.draw('kamibutuhmakanges', {
    'type': 'floating-chat',
    'floating-chat.donateButton.text': 'Support Us',
    'floating-chat.donateButton.background-color': '#ECB365',
    'floating-chat.donateButton.text-color': '#04293A'
  });
</script>
<?php
require "footer.php";
?>
</body>

</html>
