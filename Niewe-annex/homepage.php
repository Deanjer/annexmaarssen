<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/agenda.css">
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
    <?php include 'api.php' ?>
    <?php //include 'header.php' ?>
    <!-- <div>
        <h1 id="title">FILM AGENDA</h1>
    </div> -->
     <?php 
// Setting up the cURL request 
$ch = curl_init(); 
$url = 'https://api.pulllee.com'; 

// Skip SSL Verification (it's self-signed) 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 

// Set the URL 
curl_setopt($ch, CURLOPT_URL, $url); 

// now playing request example 
curl_setopt($ch, CURLOPT_HTTPHEADER, [ 
  'Authorization: qR2IONAfNsTtNYZihzonKJIaGrV4RUQK', // Your API key goes here 
  'request: {"type":"now_playing","page":1}' 
  // The request body goes here 
  // (this example gets the data of the movies currently playing in theatres (page 1)) 
  // page can be left empty to get page 1 
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
?>
<div class="agenda">
<div class="agenda-container">
    <div class="agenda-top-container">
        <div class="agenda-top-title">
            <h2 class="">Film Agenda</h2>
        </div>
        <div class="agenda-top-container-buttons">
        <div id="tune" class="material-symbols-outlined">
        tune
        </div> 
        <div class="agenda-top-films"><p>FILMS</p></div>
        <div class="agenda-top-week"><p>DEZE WEEK</p></div>
        <div class="agenda-top-vandaag"><p>VANDAAG</p></div>
        <div class="agenda-top-categorie"><p>CATEGORIE</p></div>
        </div>
    </div>
<?php
echo "<div id='filmkaart-container'>";
for ($i = 0; $i < count($response->results); $i++) {
  echo "<div id='filmkaart'>";
  echo "<div id='kaarttext'>";
  echo "<img class='posters';'; src=\"". $response->results[$i]->poster . "\"/>";
  echo "<div class='film-title'>Title: ". $response->results[$i]->movie_name ."</div>" . "<br><br>";
  echo "<span>Date: ". $response->results[$i]->movie_date ."</span>" . "<br><br>";
  echo "<div class='text-container'>Description: ". mb_strimwidth($response->results[$i]->big_description, 0, 100, "...")  ."</div>" . "<br><br>";
  //$response->results[$i]->big_description 
  echo "<span>Language: ". $response->results[$i]->original_language ."</span>" . "<br><br>";
  echo "<a href='info.php?id=" . $response->results[$i]->movie_id . "'>";
  echo "<button class='info-button'>Meer info</button" . "<br><br>";
  echo "</a>";
  // echo "<span>". $response->results[$i]-> . "</span>" . "<br>";
  echo "</div>";
  echo "</div>";
}
echo "</div>";
// Use the $response object as you wish!

// echo "<pre>";
// var_dump($response);
// echo "</pre>";

?>
<?php   //echo '<pre>',print_r($response,1),'</pre>'; ?>

</div>
</div>
<?php include 'footer.php';?>
</body>

</html>