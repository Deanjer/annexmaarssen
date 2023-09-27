<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php
    include './header.php';
    include './api.php';
    ?>
    <div id="container">
        <div class="content introductie">
            <div>
                <H1>WELKOM BIJ ANNEXBIOS</H1>
            </div>
            <div id="introtext">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aut veniam porro quibusdam vel nemo numquam repudiandae officia, totam similique ratione amet rem harum, saepe dignissimos obcaecati, odit culpa laudantium.</p>
            </div>
            <div id="BekijkFilms"><button>BEKIJK DE DRAAIENDE FIMS</button></div>
        </div>
        <div class="content locatie">
            <div class="kaart"><img src="./img/maps.png">
                <div id="kaartinfo">
                    <div class="dot"><img src="./img/location_on_FILL1_wght400_GRAD0_opsz24.svg" class="filter">
                        <p id="adress">Rijksstraatweg 42
                            3223 KA Hellevoetsluis</p>
                    </div>
                    <div id="telefoon"><img src="./img/call_FILL1_wght400_GRAD0_opsz24.svg" class="filter">
                        <p id="telefoonnummer">020-12345678</p>
                    </div>
                    <div id="bereikbaar">
                        <p>BEREIKBAARHEID</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis reprehenderit porro in repudiandae voluptas quod ab maxime dolore facere ullam sed officia harum culpa, pariatur autem fugiat, repellat ad? Esse?</p>
                    </div>
                </div>
            </div>
            <div class="gebouw"><img src="./img/Naamloos.png"></div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>

</html>