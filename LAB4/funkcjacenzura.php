<?php
if ($_POST[przycisk] == true) {
 
$tablica = array ('tekst');
$tekstzpola = $_POST[pole];
function cenzura ($tab, $tekst) {
$tekst_cenzura = str_replace ($tab, "[cenzura]", $tekst);
echo $tekst_cenzura;
}
cenzura ($tablica, $tekstzpola);
}

if ($_POST[przycisk2] == true) {

$male = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
$duze = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
$str = strtr($_POST[pole], $male, $duze);
echo $str;
}
function przeszukaj($przeszukiwany, $szukany) {
$licznik = 0;
$poz = 0;
while ($poz = strpos($przeszukiwany, $szukany, $poz) !== false) {
$licznik++;
$poz++;
}
echo "Liczba powtorzen WYRAZU".$przeszukiwany."W".$szukany."TO".$licznik;
}
if ($_POST[przycisk3] == true) {


przeszukaj ($_POST[pole], $_POST[pole2]);
}
?>