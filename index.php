<?php
// Lleida
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
echo "La temperatura de lleida es: " . $data->main->temp . " ºC<br>";

// Londres
$googleApiUrl2 = "http://api.openweathermap.org/data/2.5/weather?q=London&appid=cdc8225afaa584c0dbf32b57f6b0ed0e&units=metric";

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data2 = json_decode($response);
echo "La temperatura de Londres es: " . $data2->main->temp . " ºC<br>";
echo "La diferencia es de: " . abs($data->main->temp - $data2->main->temp) . " ºC";
?>
