<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head">
      
            <div class="photobg">
        </div>

      <?php
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.punkapi.com/v2/beers/");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $res = curl_exec($ch);
                curl_close($ch);

                $data = json_decode( file_get_contents('https://api.punkapi.com/v2/beers/'), true );

                $tamanio= sizeof($data);

                for ($x=0;$x<$tamanio;$x++){

                    
                    $a = $data[$x]['image_url'];
                    echo "<div class=beer>";
                    echo "<h1>",$data[$x]['name'],"</h1>";
                    echo "<img src='$a' class='beers'>";
                    echo "</div>";
                }
                

      ?>
</body>
</html>