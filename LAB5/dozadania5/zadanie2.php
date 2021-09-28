<?php
$dzien_tyg = date("w ");
$dni_tyg = array ("poniedialek", "wtorek", "sroda", "czwartek", "piatek", "sobota", "Niedziela");
echo "Dzis jest ";
echo $dni_tyg[$dzien_tyg - 1];
echo ",&nbsp;";
$dzien_mies = date("n ");
$dni_mies = array ("styczen", "luty", "marzec", "kwiecien", "maj", "czerwiec", "lipiec", "sierpien", "wrzesien", "pazdziernik", "listopad", "grudzien");
echo date("d ");
echo $dni_mies [$dzien_mies - 1];
echo "&nbsp;";
echo date("Y");
echo ",&nbsp;";
echo date("G:i:sa ");
echo ",&nbsp;";
echo date("O ");
echo gmdate("T ");

?>