<?php
if (isSet($_POST['zeruj'])) {
$licznik = 0;
setCookie ("licznik", $licznik, time() + 60*60*24*7);
$flaga = true;
}

if (!isSet ($_COOKIE['licznik']) && isSet($_POST) /*&& $flaga*/) {
include ("odwiedzana_strona.html");
$licznik = 1;
setCookie ("licznik", $licznik, time() + 60*60*24*7);
}
else if (isSet ($_COOKIE['licznik']) && isSet($_POST) /*&& $flaga*/) {
include ("odwiedzana_strona.html");
$licznik = $_COOKIE['licznik'];
$licznik++;
setCookie ("licznik", $licznik, time() + 60*60*24*7);
}

$licznik = $_COOKIE['licznik'];

if ($licznik >= 7) {
echo ("Odwiedziles juz ta strone 7 lub wiecej razy.");
include("zerowanie.html");
$flaga = false;
}
else $flaga = true;


?>