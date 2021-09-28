<?php
$str = "Przykladowy wiersz tekstu.";
if (!$fd = fopen("tekst.txt", "wb")) {
echo "Nie moge otworzyc pliku tekst.txt.";
}
else {
if(fwrite($fd, $str) === false) {
echo "Wystapil blad, Zapis nie zostal dokonany.";
}
else {
echo "Ciag zostal zapisany.";
}
fclose($fd);
}
?>


