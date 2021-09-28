<?php

$MyBasket1 = Array("Telewizor", "Ksi¹¿ka kucharska", "S³uchawki", "Stó³ kuchenny", "Kawa inka");

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

