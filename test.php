<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


//get name
$var_value = $_GET['varname'];

		$photo_to_paste="ekosp250x333.jpg";  //image 321 x 400
 	   $white_image="card-template2.jpg"; //873 x 622 

        $im = imagecreatefromjpeg($white_image);
        $condicion = GetImageSize($photo_to_paste); // image format?

        if($condicion[2] == 1) //gif
        $im2 = imagecreatefromgif("$photo_to_paste");
        if($condicion[2] == 2) //jpg
        $im2 = imagecreatefromjpeg("$photo_to_paste");
        if($condicion[2] == 3) //png
        $im2 = imagecreatefrompng("$photo_to_paste");
		
		
		imagecopy($im, $im2, 65, 110, 0, 0, imagesx($im2), imagesy($im2));
		


		header("Content-type: image/jpeg");
    $imgPath = 'test4.jpg';
    $image = $im;
	$color = imagecolorallocate($image, 0, 0, 0);
    
	$string = "dummy name";
	if (!empty($var_value)) {
		$string = $var_value;
	}
    $fontSize = 5;
	$x = 415;
    $y = 185;
    imagestring($image, $fontSize, $x, $y, $string, $color);
    
	$string = "Android Developer, Technical Consultant";
    $fontSize = 5;
	$x = 415;
    $y = 285;
    imagestring($image, $fontSize, $x, $y, $string, $color);	
	
	$string = "Tangerang, Banten, Indonesia";
    $fontSize = 5;
	$x = 415;
    $y = 385;
    imagestring($image, $fontSize, $x, $y, $string, $color);
	
	
	// show image on browser
	imagejpeg($image);
		
		
?>