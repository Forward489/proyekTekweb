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


    /* Animasi konten */
    #infoCard .beforeHover {
        padding-top: 30px;
        bottom: 50px;
        opacity: 1;
    }

    #infoCard .afterHover {
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
        <div class="container p-3">
            <div class="information">
                <div class="row">
                    <div id="infoCard">
                        <p class="beforeHover">Corona variant alpha</p>
                        <p class="afterHover">This is the first corona variant to be found among the others</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>