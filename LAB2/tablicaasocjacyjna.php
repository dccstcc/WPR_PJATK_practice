<?php
//tworzymy tablice asocjacyjna

$tablica = array("imie"=>"Jan","nazwisko"=>"Kowalski","email"=>"jankowal@gmail.com");

//wyœwitlamy

foreach($tablica as $klucz => $dana)
{
   echo 'Klucz to <b>'.$klucz.'</b>a jego wartosc to <b>'.$dana.'</b>';
}

?>