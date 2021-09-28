<?php
//tworzymy tablice
$tablica = array("Telewizor","Ksi¹¿ka kucharska","S³uchawki","Stó³ kuchenny","Kawa inka");
//wyœwietlamy tablice
echo "<pre>";
print_r($tablica);
echo "</pre>";

echo "<br>";

array_push($tablica, "Telefon","Plecak");

echo "<pre>";
print_r($tablica);
echo "</pre>";

echo "<br>";

unset ($tablica[1], $tablica[3]);

echo "<pre>";
print_r($tablica);
echo "</pre>";

echo "<br>";

echo "Dynamiczne tworzenie tablicy";
echo "<br /><br />";
echo "To jest@przykladowy@ciag znakowArray";
echo "<br />";

$ciag = "To jest@przykladowy@ciag znakowArray";

$tablica = explode("@",$ciag);
echo "<pre>";
print_r($tablica);
echo "</pre>";


?>