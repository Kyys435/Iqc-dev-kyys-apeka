<?php
header("Content-Type: image/png");
header("Content-Disposition: attachment; filename=kyys-apeka-dev.png");

$time = urlencode($_GET["time"]);
$battery = urlencode($_GET["battery"]);
$carrier = urlencode($_GET["carrier"]);
$text = urlencode($_GET["text"]);

$url = "https://brat.siputzx.my.id/iphone-quoted?time=$time&batteryPercentage=$battery&carrierName=$carrier&messageText=$text";

$image = @file_get_contents($url);

if(!$image){
    http_response_code(500);
    echo "Gagal mengambil gambar dari API.";
    exit;
}

echo $image;
