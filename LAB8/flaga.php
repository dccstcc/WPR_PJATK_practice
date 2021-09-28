<?php 
$obrazId = imagecreatetruecolor(120,80);
$niebieski = imagecolorallocate($obrazId,0,0,255);
$zolty = imagecolorallocate($obrazId,255,255,0);
imagefill($obrazId,0,0,$niebieski);
imagefilledrectangle($obrazId, 40 , 0, 50, 80, $zolty);
imagefilledrectangle($obrazId, 0 , 35, 120, 45, $zolty);
imagejpeg($obrazId, "image.jpg");
$szer = imagesx($obrazId);
echo "szerokosc wynosi:";
echo "$szer";
echo "<br />";
$wys = imagesy($obrazId);
echo "wysokosc wynosi:";
echo "$wys";
imagedestroy($obrazId);
?>
<img src="image.jpg">
