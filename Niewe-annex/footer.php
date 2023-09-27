<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: 'Lato', sans-serif;
    }

    .footer-container {
        width: 100%;
        height: 49.63655244029076vh;
        background-color: #666666;
        /* margin-top: 50px; */
    }

    .footer-container-margin {
        display: flex;
        justify-content: space-around;
    }

    .part1 img {
        width: 50%;
        height: autol
    }

    .part1 p {
        color: white;
        margin-top: 5px;
        font-size: 2vw;
    }

    .part1 button {
        color: #666666;
        border: none;
        height: 3.842159916926272vh;
        width: 30%;
        font-weight: bold;
        margin-top: 10px;
    }

    .part1 {
        width: 20%;
        height: 50px;
        /* background-color: white; */
        margin-top: 30px;
    }

    .part2 {
        width: 20%;
        height: 50px;
        /* background-color: white; */
        margin-top: 65px;
        color: white;
    }

    .part2-nav-container {
        display: flex;
        flex-direction: column;
    }

    .part2-nav-container span {
        margin-top: 10px;
        font-size: 1.5vw;
    }

    .part2 h2 {
        font-size: 2vw;
    }

    .part3 {
        width: 20%;
        height: 50px;
        /* background-color: white; */
        margin-top: 65px;
    }

    .part3 h2 {
        font-size: 2vw;
        color: white;
    }

    .fa {
        padding: 10px;
        font-size: 20px;
        width: 20px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: white;
        color: #666666;
    }

    .fa-twitter {
        background: white;
        color: #666666;
    }

    .fa-instagram {
        background: white;
        color: #666666;
    }

    /* MEDIA QEURY */
    @media only screen and (max-width: 750px) {
        .part2 {
            margin-top: 50px;
        }

        .part3 {
            margin-top: 50px;
        }

        .fa {
            padding: 1px;
            font-size: 10px;
            width: 10px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .part1 button {
            width: 100%;
        }

        .footer-container {
            width: 100%;
            height: 29.63655244029076vh;
            background-color: #666666;
        }
    }
    </style>
    <div class="footer-container">
        <div class="footer-container-margin">
            <div class="part1">
                <img src="./img/footer-logo.png" alt="">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi facilis ab doloremque aliquid
                    animi nihil dolores?
                </p>
                <button>LEES MEER</button>
            </div>
            <div class="part2">
                <h2>NAVIGEER</h2>
                <div class="part2-nav-container">
                    <span>Werken bij</span>
                    <span>Veelgestelde vragen</span>
                    <span>Vestigingen</span>
                    <span>Contact</span>
                </div>
            </div>
            <div class="part3">
                <h2>VOLG ONS</h2>
                <div class="media-container">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>