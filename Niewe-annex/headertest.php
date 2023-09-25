<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="header">
        <div class="header-container"></div>
        <?php 
        include 'api.php';

        echo '<pre>',print_r($response,1),'</pre>';

        // print_r ($response->genres[1]);
        // echo count($response->genres);     
        for($i = 0; $i < count($response->genres); $i++){
            echo $i ."<br>";
            echo $response->genres[$i]."<br>";
        }
        ?>
    </div>
</body>
</html>