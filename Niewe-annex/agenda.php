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
    <!-- <div id="agenda">
        <a href=""><div class="film">
            <div class="slot"></div>
            <img class="poster" src="./img/oppenheimerposter.jpg" alt="oppenheimer">
            <div class="movietitle"><h3 class="name">Oppenheimer</h3></div>
            <h5 class="desciption" id="oppenheimer">THE WORLD FOREVER CHANGES.</h5>
        </div></a>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="barbieposter" src="./img/barbieposter.jpg" alt="barbie">
            <div class="movietitle"><h3 class="name">Barbie</h3></div>
            <h5 class="desciption" id="barbie">SHE’S EVERYTHING. HE’S JUST KEN.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="talktomeposter" src="./img/talktomeposter.jpg" alt="talktome">
            <div class="movietitle"><h3 class="name">Talk To Me</h3></div>
            <h5 class="desciption" id="talktome">YOU CALL. THEY’LL ANSWER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="tmntposter" src="./img/tmntposter.jpg" alt="tmnt">
            <div class="movietitle"><h3 class="name" id="tmntname">Teenage Mutant Ninja Turtles: Mutant Mayhem</h3></div>
            <h5 class="desciption" id="tmnt">A NEW GENERATION OF HEROES WILL RISE… STRAIGHT FROM THE SEWERS.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" src="./img/oppenheimerposter.jpg" alt="oppenheimer">
            <div class="movietitle"><h3 class="name">Oppenheimer</h3></div>
            <h5 class="desciption" id="oppenheimer">THE WORLD FOREVER CHANGES.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="talktomeposter" src="./img/talktomeposter.jpg" alt="talktome">
            <div class="movietitle"><h3 class="name">Talk To Me</h3></div>
            <h5 class="desciption" id="talktome">YOU CALL. THEY’LL ANSWER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="granturismoposter" src="./img/granturismoposter.jpg" alt="granturismo">
            <div class="movietitle"><h3 class="name">Gran Tursimo</h3></div>
            <h5 class="desciption" id="granturismo">FROM GAMER TO RACER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="barbieposter" src="./img/barbieposter.jpg" alt="barbie">
            <div class="movietitle"><h3 class="name">Barbie</h3></div>
            <h5 class="desciption" id="barbie">SHE’S EVERYTHING. HE’S JUST KEN.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="tmntposter" src="./img/tmntposter.jpg" alt="tmnt">
            <div class="movietitle"><h3 class="name" id="tmntname">Teenage Mutant Ninja Turtles: Mutant Mayhem</h3></div>
            <h5 class="desciption" id="tmnt">A NEW GENERATION OF HEROES WILL RISE… STRAIGHT FROM THE SEWERS.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="bluebeetleposter" src="./img/bluebeetleposter.jpg" alt="bluebeetle">
            <div class="movietitle"><h3 class="name" id="bluebeetlenname">Blue Beetle</h3></div>
            <h5 class="desciption" id="bluebeetle">JAIME REYES IS A SUPERHERO WHETHER HE LIKES IT OR NOT.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" src="./img/oppenheimerposter.jpg" alt="oppenheimer">
            <div class="movietitle"><h3 class="name">Oppenheimer</h3></div>
            <h5 class="desciption" id="oppenheimer">THE WORLD FOREVER CHANGES.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="granturismoposter" src="./img/granturismoposter.jpg" alt="granturismo">
            <div class="movietitle"><h3 class="name">Gran Tursimo</h3></div>
            <h5 class="desciption" id="granturismo">FROM GAMER TO RACER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="talktomeposter" src="./img/talktomeposter.jpg" alt="talktome">
            <div class="movietitle"><h3 class="name">Talk To Me</h3></div>
            <h5 class="desciption" id="talktome">YOU CALL. THEY’LL ANSWER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="tmntposter" src="./img/tmntposter.jpg" alt="tmnt">
            <div class="movietitle"><h3 class="name" id="tmntname">Teenage Mutant Ninja Turtles: Mutant Mayhem</h3></div>
            <h5 class="desciption" id="tmnt">A NEW GENERATION OF HEROES WILL RISE… STRAIGHT FROM THE SEWERS.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="barbieposter" src="./img/barbieposter.jpg" alt="barbie">
            <div class="movietitle"><h3 class="name">Barbie</h3></div>
            <h5 class="desciption" id="barbie">SHE’S EVERYTHING. HE’S JUST KEN.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="straysposter" src="./img/straysposter.jpg" alt="strays">
            <div class="movietitle"><h3 class="name">Strays</h3></div>
            <h5 class="desciption" id="strays">GO FETCH YOURSELF.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="bluebeetleposter" src="./img/bluebeetleposter.jpg" alt="bluebeetle">
            <div class="movietitle"><h3 class="name" id="bluebeetlenname">Blue Beetle</h3></div>
            <h5 class="desciption" id="bluebeetle">JAIME REYES IS A SUPERHERO WHETHER HE LIKES IT OR NOT.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" src="./img/oppenheimerposter.jpg" alt="oppenheimer">
            <div class="movietitle"><h3 class="name">Oppenheimer</h3></div>
            <h5 class="desciption" id="oppenheimer">THE WORLD FOREVER CHANGES.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="granturismoposter" src="./img/granturismoposter.jpg" alt="granturismo">
            <div class="movietitle"><h3 class="name">Gran Tursimo</h3></div>
            <h5 class="desciption" id="granturismo">FROM GAMER TO RACER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="nunposter" src="./img/nun2poster.jpg" alt="nun">
            <div class="movietitle"><h3 class="name">The Nun II</h3></div>
            <h5 class="desciption" id="thenun">THE GREATEST EVIL IN THE CONJURING UNIVERSE.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="barbieposter" src="./img/barbieposter.jpg" alt="barbie">
            <div class="movietitle"><h3 class="name">Barbie</h3></div>
            <h5 class="desciption" id="barbie">SHE’S EVERYTHING. HE’S JUST KEN.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="talktomeposter" src="./img/talktomeposter.jpg" alt="talktome">
            <div class="movietitle"><h3 class="name">Talk To Me</h3></div>
            <h5 class="desciption" id="talktome">YOU CALL. THEY’LL ANSWER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="tmntposter" src="./img/tmntposter.jpg" alt="tmnt">
            <div class="movietitle"><h3 class="name" id="tmntname">Teenage Mutant Ninja Turtles: Mutant Mayhem</h3></div>
            <h5 class="desciption" id="tmnt">A NEW GENERATION OF HEROES WILL RISE… STRAIGHT FROM THE SEWERS.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="straysposter" src="./img/straysposter.jpg" alt="strays">
            <div class="movietitle"><h3 class="name">Strays</h3></div>
            <h5 class="desciption" id="strays">GO FETCH YOURSELF.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="bluebeetleposter" src="./img/bluebeetleposter.jpg" alt="bluebeetle">
            <div class="movietitle"><h3 class="name" id="bluebeetlenname">Blue Beetle</h3></div>
            <h5 class="desciption" id="bluebeetle">JAIME REYES IS A SUPERHERO WHETHER HE LIKES IT OR NOT.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" src="./img/oppenheimerposter.jpg" alt="oppenheimer">
            <div class="movietitle"><h3 class="name">Oppenheimer</h3></div>
            <h5 class="desciption" id="oppenheimer">THE WORLD FOREVER CHANGES.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="granturismoposter" src="./img/granturismoposter.jpg" alt="granturismo">
            <div class="movietitle"><h3 class="name">Gran Tursimo</h3></div>
            <h5 class="desciption" id="granturismo">FROM GAMER TO RACER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="barbieposter" src="./img/barbieposter.jpg" alt="barbie">
            <div class="movietitle"><h3 class="name">Barbie</h3></div>
            <h5 class="desciption" id="barbie">SHE’S EVERYTHING. HE’S JUST KEN.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="elementalposter" src="./img/elementalposter.jpg" alt="elemental">
            <div class="movietitle"><h3 class="name">Elemental</h3></div>
            <h5 class="desciption" id="elemental">OPPOSITES REACT.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="talktomeposter" src="./img/talktomeposter.jpg" alt="talktome">
            <div class="movietitle"><h3 class="name">Talk To Me</h3></div>
            <h5 class="desciption" id="talktome">YOU CALL. THEY’LL ANSWER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="nunposter" src="./img/nun2poster.jpg" alt="nun">
            <div class="movietitle"><h3 class="name">The Nun II</h3></div>
            <h5 class="desciption" id="thenun">THE GREATEST EVIL IN THE CONJURING UNIVERSE.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="tmntposter" src="./img/tmntposter.jpg" alt="tmnt">
            <div class="movietitle"><h3 class="name" id="tmntname">Teenage Mutant Ninja Turtles: Mutant Mayhem</h3></div>
            <h5 class="desciption" id="tmnt">A NEW GENERATION OF HEROES WILL RISE… STRAIGHT FROM THE SEWERS.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="straysposter" src="./img/straysposter.jpg" alt="strays">
            <div class="movietitle"><h3 class="name">Strays</h3></div>
            <h5 class="desciption" id="strays">GO FETCH YOURSELF.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="elementalposter" src="./img/elementalposter.jpg" alt="elemental">
            <div class="movietitle"><h3 class="name">Elemental</h3></div>
            <h5 class="desciption" id="elemental">OPPOSITES REACT.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="granturismoposter" src="./img/granturismoposter.jpg" alt="granturismo">
            <div class="movietitle"><h3 class="name">Gran Tursimo</h3></div>
            <h5 class="desciption" id="granturismo">FROM GAMER TO RACER.</h5>
        </div>
        <div class="film">
            <div class="slot"></div>
            <img class="poster" id="bluebeetleposter" src="./img/bluebeetleposter.jpg" alt="bluebeetle">
            <div class="movietitle"><h3 class="name" id="bluebeetlenname">Blue Beetle</h3></div>
            <h5 class="desciption" id="bluebeetle">JAIME REYES IS A SUPERHERO WHETHER HE LIKES IT OR NOT.</h5>
        </div>
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

echo "<div id='testFilmOverview'>";
for ($i = 0; $i < count($response->results); $i++) {
  echo "<div id='testFilmOBJ'>";
  echo "<a href='info.php?id=" . $response->results[$i]->movie_id . "'>";
  echo "<img style='width: 500px;'; src=\"". $response->results[$i]->poster . "\"/>";
  echo "<div id='testTextOBJ'>";
  echo "<span>Title: ". $response->results[$i]->movie_name ."</span>" . "<br><br>";
  echo "<span>Date: ". $response->results[$i]->movie_date ."</span>" . "<br><br>";
  echo "<span>Description: ". $response->results[$i]->big_description ."</span>" . "<br><br>";
  echo "<span>Language: ". $response->results[$i]->original_language ."</span>" . "<br><br>";
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
    </body>
</html>