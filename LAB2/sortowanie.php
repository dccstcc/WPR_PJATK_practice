<?php

$MyBasket1 = Array("Telewizor", "Ksi��ka kucharska", "S�uchawki", "St� kuchenny", "Kawa inka");

echo "<pre>";
print_r($MyBasket1);
echo "</pre>";

//sortowanie [A-Z] wg ASCII
echo " Tablica $MyBasket1 posortowana [ A-Z ]: ";

sort($MyBasket1);

echo "<pre>";
print_r($MyBasket1);
echo "</pre>";

//sortowanie [Z-A] wg ASCII
echo " Tablica $MyBasket1 posortowana [ Z-A ]: ";

rsort($MyBasket1);

echo "<pre>";
print_r($MyBasket1);
echo "</pre>";
?>

