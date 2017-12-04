<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


//get name
$var_nama = $_GET['varname'];
$var_kerjaan = $_GET['varkerjaan'];
$var_status = $_GET['varstatus'];
$var_image = $_GET['varimage'];


		//$photo_to_paste="ekosp250x333.jpg";  //image 321 x 400
        $photo_to_paste=$var_image;
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
    
	$string = "dummy_name";
	if (!empty($var_nama)) {
		$string = $var_nama;
	}
    $fontSize = 5;
	$x = 415;
    $y = 185;
    imagestring($image, $fontSize, $x, $y, $string, $color);

    $string2 = "dummy_kerjaan";
    if (!empty($var_kerjaan)) {
        $string2 = $var_kerjaan;
    }
    $fontSize = 5;
	$x = 415;
    $y = 285;
    imagestring($image, $fontSize, $x, $y, $string2, $color);

	$string3 = "dummy_status";
    if (!empty($var_status)) {
        $string3 = $var_status;
    }
    $fontSize = 5;
	$x = 415;
    $y = 385;
    imagestring($image, $fontSize, $x, $y, $string3, $color);
	
	
	// show image on browser
	imagejpeg($image);
		
		
?>