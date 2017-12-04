<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


		$photo_to_paste="ekosp250x333.jpg";  //image 321 x 400
       //$photo_to_paste = resize_image("ekosp.jpg", 200, 200);
	   $white_image="card-template2.jpg"; //873 x 622 

        $im = imagecreatefromjpeg($white_image);
        $condicion = GetImageSize($photo_to_paste); // image format?

        if($condicion[2] == 1) //gif
        $im2 = imagecreatefromgif("$photo_to_paste");
        if($condicion[2] == 2) //jpg
        $im2 = imagecreatefromjpeg("$photo_to_paste");
        if($condicion[2] == 3) //png
        $im2 = imagecreatefrompng("$photo_to_paste");
		
		
	//	bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )

        //imagecopy($im, $im2, (imagesx($im)/2)-(imagesx($im2)/2), (imagesy($im)/2)-(imagesy($im2)/2), 0, 0, imagesx($im2), imagesy($im2));
		imagecopy($im, $im2, 65, 110, 0, 0, imagesx($im2), imagesy($im2));
		
		
        imagejpeg($im,"test4.jpg",90);
        imagedestroy($im);
        imagedestroy($im2);
		
		
	//	exec('php -q image.php');
		
		
?>