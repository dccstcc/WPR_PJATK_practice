<?php

//rysuje przekreslenia dla kolka

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageellipse($img, 100, 100, 150, 150, $bialy);
imageline($img, 0, 100, 200, 100, $bialy);
imagejpeg($img, "poziomakreskakolko.jpg");
imagedestroy($img);

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageellipse($img, 100, 100, 150, 150, $bialy);
imageline($img, 100, 0, 100, 200, $bialy);
imagejpeg($img, "pionowakreskakolko.jpg");
imagedestroy($img);

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageellipse($img, 100, 100, 150, 150, $bialy);
imageline($img, 0, 0, 200, 200, $bialy);
imagejpeg($img, "backslashkolko.jpg");
imagedestroy($img);

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageellipse($img, 100, 100, 150, 150, $bialy);
imageline($img, 0, 200, 200, 0, $bialy);
imagejpeg($img, "slashkolko.jpg");
imagedestroy($img);


?>