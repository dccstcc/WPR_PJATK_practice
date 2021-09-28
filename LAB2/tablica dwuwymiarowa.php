<?php
$MyBasket2 = Array(Array("name" => "Telewizor",
                         "desc" => "Opis super telewizora",
                         "vendor" => "Filips®",
                         "cat" => "AGD/RTV",
                         "price" => 6500.99),
                          
                   Array("name" => "Ksi¹¿ka kucharska",
                         "desc" => "Przygotuj to sam...",
                         "vendor" => "Selion",
                         "cat" => "Literatura",
                         "price" => 50.00),
                         
                   Array("name" => "S³uchawki",
                         "desc" => "Z tymi s³uchawkami (nie) og³uchniesz",
                         "vendor" => "Media-Foch®",
                         "cat" => "AGD/RTV",
                         "price" => 162.12),
                         
                   Array("name" => "Stó³ kuchenny",
                         "desc" => "Pokroisz na nim wszystko",
                         "vendor" => "Liroy-i-Merlin®",
                         "cat" => "DOM",
                         "price" => 9999.99),
                         
                   Array("name" => "Kawa inka",
                         "desc" => "Zbo¿owa d³ugo pa¿ona, nie pasteryzowan(e)a...",
                         "vendor" => "Ciboo®",
                         "cat" => "Monopol/Spo¿ywcze",
                         "price" => 5.50));
						 
echo "<pre>";
print_r($MyBasket2);
echo "</pre>";

//wyswietlamy losowa wartosc tablicy

$losowa = rand(0,4);

echo "<pre>";
print_r($MyBasket2 [$losowa]);
echo "</pre>";

echo "UWAGA! UWAGA! <br /> W dzisiejszym losowaniu pad³a g³owna nagroda ", $MyBasket2[$losowa]['name'], " o <br /> wartoœci ", $MyBasket2[$losowa]['price'], " PLN <br /> sponsorowana 
 przez ", $MyBasket2[$losowa]['vendor'], " ! <br /> Wszystkim srdecznie gratulujemy!";

?>