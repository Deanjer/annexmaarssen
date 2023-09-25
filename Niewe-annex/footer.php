<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }
        .footer-container{
            width: 100%;
            height: 49.63655244029076vh;
            background-color: #666666;
        }
        .footer-container-margin{
            display: flex;
            justify-content: space-around;
        }
        .part1 img{
            width: 50%;
            height: autol
        }
        .part1 p{
            color: white;
            margin-top: 5px;
            font-size:2vw;
        }
        .part1 button{
            color: #666666;
            border: none;
            height: 3.842159916926272vh;
            width: 30%;
            font-weight: bold;
            margin-top: 10px;
        }
        .part1{
            width: 20%;
            height: 50px;
            /* background-color: white; */
            margin-top: 30px;
        }
        .part2{
            width: 20%;
            height: 50px;
            /* background-color: white; */
            margin-top: 65px;
            color: white;
        }
        .part2-nav-container{
            display: flex;
            flex-direction: column;
        }
        .part2-nav-container span{
            margin-top: 10px;
            font-size:2vw;
        }
        .part2-nav-container h2{
            font-size:2vw;
        }
        .part3{
            width: 20%;
            height: 50px;
            /* background-color: white; */
            margin-top: 65px;
        }
    </style>
    <div class="footer-container">
        <div class="footer-container-margin">
        <div class="part1">
            <img src="./img/footer-logo.png" alt="">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi facilis ab doloremque aliquid animi nihil dolores?
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
        <div class="part3"></div>
        </div>
    </div>
</body>
</html>