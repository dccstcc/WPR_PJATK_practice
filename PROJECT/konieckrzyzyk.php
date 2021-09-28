<?php

//rysuje przekreslenia dla krzyzyka

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageline($img, 25, 25, 175, 175, $bialy);
imageline($img, 25, 175, 175, 25, $bialy);
imageline($img, 0, 100, 200, 100, $bialy);
imagejpeg($img, "poziomakreskakrzyzyk.jpg");
imagedestroy($img);

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageline($img, 25, 25, 175, 175, $bialy);
imageline($img, 25, 175, 175, 25, $bialy);
imageline($img, 100, 0, 100, 200, $bialy);
imagejpeg($img, "pionowakreskakrzyzyk.jpg");
imagedestroy($img);

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageline($img, 25, 25, 175, 175, $bialy);
imageline($img, 25, 175, 175, 25, $bialy);
imageline($img, 0, 0, 200, 200, $bialy);
imagejpeg($img, "backslashkrzyzyk.jpg");
imagedestroy($img);

$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageline($img, 25, 25, 175, 175, $bialy);
imageline($img, 25, 175, 175, 25, $bialy);
imageline($img, 0, 200, 200, 0, $bialy);
imagejpeg($img, "slashkrzyzyk.jpg");
imagedestroy($img);


?>