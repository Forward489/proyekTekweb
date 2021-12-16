<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<?php
session_start();
require "header.php";
?>
<style>
    .title,
    .information,
    .description {
        text-align: center;
    }
    @keyframes slideInFromBottom {
        0% {
            transform: translatey(10%);
            opacity: 0;
        }
        100% {
            opacity : 1;
            transform: translatey(0);
        }
    }
    #infoCard {
        animation: 2s ease-out 0s 1 slideInFromBottom;
    }
    /* For info card */
    #infoCard {
        position: relative;
        width: 300px;
        height: 400px;
        background-color: #B01D22;
        border-radius: 10px;
        color: #fff;
        margin-left: 6px;
        margin-right: 44px;
        margin-bottom: 50px;
    }
    /* End of funfact text */
    #infoCard:hover::after {
        left: 50%;
        transform: translate(-50%, 0);
        opacity: 1;
    }
    /* Buat gambar korona */
    #infoCard p {
        margin: 10px;
    }
    body{
        font-family: 'Hammersmith One', sans-serif;
        background-color:#041C32;
    }
</style>
<body>
    <div class="container">
        <div class="container p-3">
            <div class="information">
                <div class="row">
                    <div id="infoCard">
                        <img src="pics/alpha.png" class="img-fluid" style="max-height:60%; max-width:60%; opacity: 0.8; padding:10px;">
                        <p>Corona variant Alpha</p>
                        <p>Varian alpha dikenal sebagai penyebab pandemi saat ini. Beberapa dari varian yang perlu dikhawatirkan, karena 40 – 80% lebih mudah menular. Ditemukan pertama di Inggris.</p>
                    </div>
                    <div id="infoCard">
                        <img src="pics/beta.png" class="img-fluid" style="max-height:60%; max-width:60%; opacity: 0.8; padding:10px;">
                        <p>Corona variant Beta</p>
                        <p>Varian beta pertama kali terdeteksi di Afrika Selatan pada awal Oktober dan telah ditemukan di lebih dari 80 negara. Vaksin AstraZeneca dipercaya bisa cukup ampuh menangani varian Beta.</p>
                    </div>
                    <div id="infoCard">
                        <img src="pics/gamma.png" class="img-fluid" style="max-height:60%; max-width:60%; opacity: 0.8; padding:10px;">
                        <p>Corona variant Gamma</p>
                        <p>Varian Gamma pertama kali ditemukan di Brazil dan Jepang. Meski jenis mutasinya berbeda dengan varian lainnya, virus ini diketahui dapat menimbulkan gejala yang mirip dengan varian lain, seperti varian Beta.</p>
                    </div>
                    <div id="infoCard">
                        <img src="pics/delta.png" class="img-fluid" style="max-height:60%; max-width:60%; opacity: 0.8; padding:10px;">
                        <p>Corona variant Delta</p>
                        <p>Varian delta lebih menular dan mampu menghindari respons imun tubuh akibat mutasi yang terjadi. Varian ini ditemukan di India yang pertama kali terdeteksi pada bulan Oktober.</p>
                    </div>
                    <div id="infoCard">
                        <img src="pics/kappa.png" class="img-fluid" style="max-height:60%; max-width:60%; opacity: 0.8; padding:10px;">
                        <p>Corona variant Kappa</p>
                        <p>Varian Kappa memiliki pola mutasi yang mirip dengan varian Delta, tetapi tingkat penularan dan keparahan infeksinya masih belum diketahui.</p>
                    </div>
                    <div id="infoCard">
                        <img src="pics/omicron.png" class="img-fluid" style="max-height:60%; max-width:60%; opacity: 0.8; padding:10px;">
                        <p>Corona variant Omicron</p>
                        <p>Omicron pertama kali dilaporkan ke WHO dari Afrika Selatan pada 24 November 2021. Situasi epidemiologis di Afrika Selatan telah ditandai oleh tiga puncak berbeda dalam kasus yang dilaporkan, yang terakhir didominasi varian Delta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>