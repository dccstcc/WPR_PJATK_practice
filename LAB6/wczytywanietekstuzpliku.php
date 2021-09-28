<?php
if(!$fd = fopen('./tekst.txt', 'r')) {
	echo("nie moge otworzyc pliku przykladowytekst.txt");
}
else {
while(!feof($fd)) {
$str = fgets($fd);
$str = nl2br($str);
echo ($str);
}
fclose($fd);
}
?>