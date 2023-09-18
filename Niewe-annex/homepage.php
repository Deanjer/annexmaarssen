<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/homepage.css">
</head>

<body>
<?php
// Setting up the cURL request
$ch = curl_init();
$url = 'https://api.pulllee.com';
// Skip SSL Verification (it's self-signed)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Set the URL
curl_setopt($ch, CURLOPT_URL, $url);
// Set the HTTP headers (the stuff you send to the API)
curl_setopt($ch, CURLOPT_HTTPHEADER, [
'Authorization: m1RK0wm0Ld4amyxTxdFyltBehuOH7mLX', // Your API key goes here
'request: {"type":"now_playing"}' // The request body goes here
]);
// Capture the output instead of echoing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Execute the cURL request
$response = curl_exec($ch);
// Check and handle errors
if (curl_errno($ch)) {
echo 'Error: ' . curl_error($ch);
curl_close($ch);
exit(); // Don't execute further
}
// Close the cURL request
curl_close($ch);
// Convert the response from json to an associative array
$response = json_decode($response);
// Dump the response in the browser
// Use the $response object as you wish!
?>

    <div id="header"></div>
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
                    <div id="telefoon"><img src="./img/phone-solid.svg">
                        <p id="adress">Rijksstraatweg 42
                            3223 KA Hellevoetsluis</p>
                    </div>
                    <div class="dot"><img src="./img/location-dot-solid.svg"><p id="telefoonnummer">020-12345678</p></div>
                </div>
            </div>
            <div class="gebouw"><img src="./img/Naamloos.png"></div>
        </div>
    </div>
</body>

</html>