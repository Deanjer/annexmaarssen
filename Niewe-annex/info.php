<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="./css/info.css">
</head>

<body>
 <?php include 'api.php'?>
    <div class="tst"></div>
    <div class="info-main">
        <div class="info-main-container">
            <div class="info-main-top">
                <div class="info-main-top-title">
                <?php
                        
                        if (isset($response->poster) && isset($response->movie_name)) {
                            // echo '<img src="' . $response->poster . '" alt="Poster">';
                            echo '<h1 class="movie-title-top">' . $response->movie_name . '</h1>';
                        } else {
                            echo '<p>Reload.</p>';
                        }
                    
                    

                        // echo $response($results)
                        // echo '<pre>',print_r($response,1),'</pre>';
                    
                    ?>
                </div>
            </div>
            <div class="info-main-middle">
                <div class="info-main-middle-left">
                    <img class="poster" src="<?php echo  $response->poster; ?>" alt="">
                </div>
                <div class="info-main-middle-right">
                    <div class="info-main-middle-right-container">
                        <div class="info-main-middle-rating">
                            <img class="stars" src="./img/ster.png" alt="">
                            <img class="stars" src="./img/ster.png" alt="">
                            <img class="stars" src="./img/ster.png" alt="">
                            <img class="stars" src="./img/ster.png" alt="">
                            <img class="stars" src="./img/ster.png" alt="">
                        </div>
                        <div class="info-main-middle-icons">
                            <img class="icon" src="./img/kijkwijzer-12.png" alt="">
                            <img class="icon" src="./img/kijkwijzer-eng.png" alt="">
                            <img class="icon" src="./img/kijkwijzer-geweld.png" alt="">
                        </div>
                        <div class="info-main-middle-right-text">
                            <div class="info-main-release">
                                <p class="text-spacing"><?php echo $response->movie_date ?></p>
                                <p class="text-spacing"><?php echo $response->big_description ?></p>
                                <div class="info-films-container-right">
                                <span class="info-films">Genre: <?php echo join (", ",$response->genres);?></span>
                                <span class="info-films">Filmlengte: <?php echo $response->runtime ?> </span>
                                <span class="info-films">Land: <?php echo $response->country_of_origin ?> </span>
                                <span class="info-films">Imdb score: <?php echo $response->rating ?> </span>
                                <span class="info-films">Cast: <?php echo $response->cast ?> </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-main-bottom">
                <div class="info-main-bottom-title">
                    <h2 id="bottom-title">KOOP JE TICKETS</h2>
                </div>
                <div class="info-main-bottom-video">
                    <div class="trailer-video">
                        <h1>Video niet beschikbaar </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  //echo '<pre>',print_r($response,1),'</pre>'; ?>
<?php include 'footer.php';?>
</body>

</html>