<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/agenda.css">
</head>
<body>

    <?php include 'api.php' ?>
    <div>
        <h1 id="title">FILM AGENDA</h1>
    </div>
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
    </body>
</html>