<?php
$MyBasket1 = Array("Telewizor", "Ksi��ka kucharska", "S�uchawki", "St� kuchenny", "Kawa inka");

//
$odpServ = in_array ("St� kuchenny", $MyBasket1);
echo "Pytanie: Czy w moim koszyku 1 znajduje sie Stol kuchenny ? <br /> Odpowiedz serwera: ", $odpServ; 

$klucz = array_search ('Kawa inka', $MyBasket1);
echo "<br /><br /><br /> Czy w moim koszyku 2 znajduje sie Kawa Inka? <br /> Jesli tak to na jakiej pozycji w koszyku? <br />
Odpowiedz serwera: ", $klucz;
?>