<?php

//rysuje losowe kolko i blokuje to wylosowane pole wyboru
if($_SESSION['aktywacja1'] == 'img') {
$randnr = rand(2,9);
}
else if($_SESSION['aktywacja2'] == 'img') {
$randnr = rand(3,10);
if ($randnr == 10) {
$randnr = 1;
}
}
else if($_SESSION['aktywacja3'] == 'img') {
$randnr = rand(4,11);
if ($randnr > 9) {
$randnr = rand(1,2);
}
}
else if($_SESSION['aktywacja4'] == 'img') {
$randnr = rand(5,12);
if ($randnr > 9) {
$randnr = rand(1,3);
}
}
else if($_SESSION['aktywacja5'] == 'img') {
$randnr = rand(6,13);
if ($randnr > 9) {
$randnr = rand(1,4);
}
}
else if($_SESSION['aktywacja6'] == 'img') {
$randnr = rand(7,14);
if ($randnr > 9) {
$randnr = rand(1,5);
}
}
else if($_SESSION['aktywacja7'] == 'img') {
$randnr = rand(8,15);
if ($randnr > 9) {
$randnr = rand(1,6);
}
}
else if($_SESSION['aktywacja8'] == 'img') {
$randnr = rand(9,16);
if ($randnr > 9) {
$randnr = rand(1,7);
}
}
else if($_SESSION['aktywacja9'] == 'img') {
$randnr = rand(1,8);
}

//jezeli na wylosowanym polu jest juz kolko albo krzyzyk wybiera nastepne pole
if($randnr == 1 && ($_SESSION['pole1'] == 'czarnepolekolko.jpg' || $_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 2;
}
else if($randnr == 2 && ($_SESSION['pole2'] == 'czarnepolekolko.jpg' || $_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 3;
}
else if($randnr == 3 && ($_SESSION['pole3'] == 'czarnepolekolko.jpg' || $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 4;
}
else if($randnr == 4 && ($_SESSION['pole4'] == 'czarnepolekolko.jpg' || $_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 5;
}
else if($randnr == 5 && ($_SESSION['pole5'] == 'czarnepolekolko.jpg' || $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 6;
}
else if($randnr == 6 && ($_SESSION['pole6'] == 'czarnepolekolko.jpg' || $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 7;
}
else if($randnr == 7 && ($_SESSION['pole7'] == 'czarnepolekolko.jpg' || $_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 8;
}
else if($randnr == 8 && ($_SESSION['pole8'] == 'czarnepolekolko.jpg' || $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 9;
}
else if($randnr == 9 && ($_SESSION['pole9'] == 'czarnepolekolko.jpg' || $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg')) {
	$randnr == 1;
}


// ustawia kolko na wylosowanym polu i dezaktywuje pole
switch ($randnr) {
case 1 : 


$_SESSION['pole1'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja1'] = 'img';

break;
case 2 :


$_SESSION['pole2'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja2'] = 'img';
break;
case 3 :


$_SESSION['pole3'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja3'] = 'img';
break;
case 4 :


$_SESSION['pole4'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja4'] = 'img';
break;
case 5 :


$_SESSION['pole5'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja5'] = 'img';
break;
case 6 :


$_SESSION['pole6'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja6'] = 'img';
break;
case 7 :


$_SESSION['pole7'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja7'] = 'img';
break;
case 8 :


$_SESSION['pole8'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja8'] = 'img';
break;
case 9 :


$_SESSION['pole9'] = 'czarnepolekolko.jpg';
$_SESSION['aktywacja9'] = 'img';
break;
}
?>