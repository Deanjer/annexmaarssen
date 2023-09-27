<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestel</title>
    <link rel="stylesheet" href="./css/bestel.css">
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <div class="flex-container">
        <div>
            <h1 id="title">Tickets Bestellen</h1>
        </div>
        <div>
            <h3 class="catagorie">placeholder</h3>
            <h3 class="catagorie">Datum</h3>
            <h3 class="catagorie">tijdstip</h3>
        </div>
        <div class="form-flex">
            <div class="form-container">
                <div class="form">
                    <div>
                        <h2 class="tickets">STAP 1: KIES JE TICKETS</h2>
                        <div id="info">
                            <h4>TYPE</h4>
                            <h4>PRIJS</h4>
                            <h4>AANTAL</h4>
                        </div>
                        <div class="vouchercode">
                            <h4>VOUCHERCODE</h4>
                            <input type="text" name="Vouchercode">
                        </div>
                    </div>
                    <!-- form met tickets -->
                    <div>
                        <h2 class="tickets">STAP 2: KIES JE STOEL</h2>
                    </div>
                    <div class="zaal">
                        <img src="./img/zaalrood.png" alt="zaal">
                    </div>
                    <!-- foto van de zaal en stoelen aan klikken -->
                    <div>
                        <h2 class="tickets">STAP 3: CONTROLEER JE BESTELLING</h2>
                    </div>
                    <!-- via de API een kleine info pagina waarin een poster en tijd. Via de database de stoelen en tickets -->
                    <div>
                        <div>
                            <h2 id="info">STAP 4: VUL JE GEGEVENS IN</h2>
                            <form action="database.php" method="POST">
                                <input type="text" name="Voornaam">
                                <input type="text" name="Achternaam"><br>
                                <input type="text" name="E-Mail"><br>
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="afrekenen">
                    <h1 id="betalen">AFREKENEN</h1>
                </div>

    <?php
        include 'footer.php';
    ?>
</body>

</html>