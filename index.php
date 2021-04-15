<?php

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Lleida&appid=cdc8225afaa584c0dbf32b57f6b0ed0e&units=metric";

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
echo "La temperatura de lleida es: " . $data->main->temp . " ºC";
?>
<html>
    <head>
        <title>untitled page</title>	
    </head>
    <body>
        <?php echo "La temperatura de lleida es: " . $data->main->temp . " ºC"; ?>
    </body>
</html>
