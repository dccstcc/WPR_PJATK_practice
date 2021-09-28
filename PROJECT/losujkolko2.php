<?php

//uwzglednia rozne kombinacje polozen kolka i krzyzyka (zaklada ze jest juz ustwione jedno kolko i jeden krzyzyk)
//nie symuluje pradopodobienstwa wygranej lub przegranej
if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja2'] == 'img') {
$randnr = rand(3,9);
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja3'] == 'img') {
$randnr = rand(4,10);
if ($randnr > 9) {
$randnr = 1;
}
}
else if($_SESSION['aktywacja3'] == 'img' && $_SESSION['aktywacja4'] == 'img') {
$randnr = rand(1,11);
if ($randnr > 9) {
$randnr = rand(2,3);
}
}
else if($_SESSION['aktywacja4'] == 'img' && $_SESSION['aktywacja5'] == 'img') {
$randnr = rand(1,9);
if ($randnr == 4 || $randnr == 5) {
$randnr = rand(1,3);
}
}
else if($_SESSION['aktywacja5'] == 'img' && $_SESSION['aktywacja6'] == 'img') {
$randnr = rand(1,9);
if ($randnr == 5 || $randnr == 6) {
$randnr = rand(7,9);
}
}
else if($_SESSION['aktywacja6'] == 'img' && $_SESSION['aktywacja7'] == 'img') {
$randnr = rand(1,9);
if ($randnr ==6 || $randnr == 7) {
$randnr = rand(1,5);
}
}
else if($_SESSION['aktywacja7'] == 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(1,9);
if ($randnr == 7||$randnr==8) {
$randnr = rand(1,6);
}
}
else if($_SESSION['aktywacja8'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(1,9);
if ($randnr > 8) {
$randnr = rand(1,7);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja3'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==3) {
$randnr = rand(4, 9);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja4'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==4) {
$randnr = rand(5, 9);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja5'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==5) {
$randnr = rand(4, 9);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja6'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==6) {
$randnr = rand(2,5);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja7'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==7) {
$randnr = rand(2, 6);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==8) {
$randnr = rand(2, 7);
}
}
else if($_SESSION['aktywacja1'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(1,9);
if($randnr==1 || $randnr==9) {
$randnr = rand(2, 8);
}
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja4'] == 'img') {
$randnr = rand(1,9);
if($randnr < 5) {
$randnr = 3;
}
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja5'] == 'img') {
$randnr = rand(6,9);
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja6'] == 'img') {
$randnr = rand(3,5);
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja7'] == 'img') {
$randnr = rand(3,6);
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(3,7);
}
else if($_SESSION['aktywacja2'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(3,7);
}
else if($_SESSION['aktywacja3'] == 'img' && $_SESSION['aktywacja5'] == 'img') {
$randnr = rand(6,9);
}
else if($_SESSION['aktywacja3'] == 'img' && $_SESSION['aktywacja6'] == 'img') {
$randnr = rand(7,9);
}
else if($_SESSION['aktywacja3'] == 'img' && $_SESSION['aktywacja7'] == 'img') {
$randnr = rand(4,6);
}
else if($_SESSION['aktywacja3'] == 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(4,7);
}
else if($_SESSION['aktywacja3'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(4,8);
}
else if($_SESSION['aktywacja4'] == 'img' && $_SESSION['aktywacja6'] == 'img') {
$randnr = rand(7,9);
}
else if($_SESSION['aktywacja4'] == 'img' && $_SESSION['aktywacja7'] == 'img') {
$randnr = rand(1,3);
}
else if($_SESSION['aktywacja4'] == 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(5,7);
}
else if($_SESSION['aktywacja4'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(5,8);
}
else if($_SESSION['aktywacja5'] == 'img' && $_SESSION['aktywacja7'] == 'img') {
$randnr = rand(1,4);
}
else if($_SESSION['aktywacja5'] == 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(1,4);
}
else if($_SESSION['aktywacja5'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(6,8);
}
else if($$_SESSION['aktywacja6']== 'img' && $_SESSION['aktywacja8'] == 'img') {
$randnr = rand(1,5);
}
else if($_SESSION['aktywacja6'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(1,5);
}
else if($_SESSION['aktywacja7'] == 'img' && $_SESSION['aktywacja9'] == 'img') {
$randnr = rand(1,6);
}
else {
//na wypadek zapetlenia
}

//jezeli wszystkie pola sa juz zajete nie wykonuje ponizszego fragmentu kodu, aby sie nie zapetlic
if (!($_SESSION['aktywacja1'] == 'img' &&
$_SESSION['aktywacja2'] == 'img' &&
$_SESSION['aktywacja3'] == 'img' &&
$_SESSION['aktywacja4'] == 'img' &&
$_SESSION['aktywacja5'] == 'img' &&
$_SESSION['aktywacja6'] == 'img' &&
$_SESSION['aktywacja7'] == 'img' &&
$_SESSION['aktywacja8'] == 'img' &&
$_SESSION['aktywacja9'] == 'img')) {
//jezeli na wylosowanej pozycji znajduje sie juz kolko albo krzyzyk to uruchamia losowanie od nowa, az znajdzie wolne pole
if($randnr == 1 && ($_SESSION['pole1'] == 'czarnepolekolko.jpg' || $_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 2 && ($_SESSION['pole2'] == 'czarnepolekolko.jpg' || $_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 3 && ($_SESSION['pole3'] == 'czarnepolekolko.jpg' || $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 4 && ($_SESSION['pole4'] == 'czarnepolekolko.jpg' || $_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 5 && ($_SESSION['pole5'] == 'czarnepolekolko.jpg' || $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 6 && ($_SESSION['pole6'] == 'czarnepolekolko.jpg' || $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 7 && ($_SESSION['pole7'] == 'czarnepolekolko.jpg' || $_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 8 && ($_SESSION['pole8'] == 'czarnepolekolko.jpg' || $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else if($randnr == 9 && ($_SESSION['pole9'] == 'czarnepolekolko.jpg' || $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg')) {
	include 'losujkolko2.php';
}
else {
// na wypadek zapetlenia
}
}

//rysuje losowe kolko i blokuje to wylosowane pole wyboru
switch ($randnr) {


case 1 : 
//nie rysuje kolka gdy  pole jest juz zajete
if ($_SESSION['pole1'] == 'czarnepolekolko.jpg' || $_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole1'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja1'] = 'img';
break;


case 2 :
if ($_SESSION['pole2'] == 'czarnepolekolko.jpg' || $_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole2'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja2'] = 'img';
break;


case 3 :
if ($_SESSION['pole3'] == 'czarnepolekolko.jpg' || $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole3'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja3'] = 'img';
break;


case 4 :
if ($_SESSION['pole4'] == 'czarnepolekolko.jpg' || $_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole4'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja4'] = 'img';
break;


case 5 :
if ($_SESSION['pole5'] == 'czarnepolekolko.jpg' || $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole5'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja5'] = 'img';
break;


case 6 :
if ($_SESSION['pole6'] == 'czarnepolekolko.jpg' || $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole6'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja6'] = 'img';
break;


case 7 :
if ($_SESSION['pole7'] == 'czarnepolekolko.jpg' || $_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole7'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja7'] = 'img';
break;


case 8 :
if ($_SESSION['pole8'] == 'czarnepolekolko.jpg' || $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole8'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja8'] = 'img';
break;


case 9 :
if ($_SESSION['pole9'] == 'czarnepolekolko.jpg' || $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg') {
break;
}

$_SESSION['pole9'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja9'] = 'img';
break;

// w razie jakiegos bledu w losowaniu
default : 
include 'gra.php' ;
}
?>