<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


// run php, sampling foto to id card
//exec('php -q mergeimage.php');


    header("Content-type: image/jpeg");
    //$imgPath = 'id-card.jpg';
	$imgPath = 'test4.jpg';
    $image = imagecreatefromjpeg($imgPath);
    //$color = imagecolorallocate($image, 255, 255, 255);
	$color = imagecolorallocate($image, 0, 0, 0);
    $string = "Eko Setyo Purnomo";
    $fontSize = 335;
    //$x = 115;
	$x = 415;
    $y = 185;
    imagestring($image, $fontSize, $x, $y, $string, $color);
    imagejpeg($image);
?>