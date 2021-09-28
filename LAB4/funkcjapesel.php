<FORM action="" method="POST">
<INPUT TYPE=TEXT Name="pole1" MAXLENGTH=11>
<INPUT TYPE=SUBMIT VALUE="Wyslij" NAME="przycisk">
</FORM>

<?php
function pesel($p) {
$rok = substr($p, 0, 2);
$miesiac = substr ($p, 2, 2);
$dzien = substr ($p, 4, 2);
$plec = substr ($p, 9, 1);
if ($plec%2==0) {$plec = 'kobieta';}
else {$plec = 'mezczyzna';}
$pom_miesiac = substr ($miesiac, 0, 1);
if ($pom_miesiac == 2) {$miesiac = "0".substr ($miesiac, 1, 1);}
else if ($pom_miesiac == 3) {$miesiac = "1".substr ($miesiac, 1, 1);}
echo "rok urodzenia to: ".$rok.", miesiac urodzenia to ".$miesiac.", dzien urodzenia to ".$dzien."plec to: ".$plec;

if (substr ($miesiac, 0, 1) == 0) {
$miesiac = "200".substr($miesiac, 1, 1);
}
else $miesiac = "19".substr($miesiac, 0, 2);

$miesiace = Array ('styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwiec', 'lipiec', 'sierpien', 'wrzesien', 'pazdziernik', 'listopad', 'grudzien');
switch ($miesiac) {
case 01 : {$miesiac = $miesiace[0]; break;}
case 02 : {$miesiac = $miesiace[1]; break;}
case 03 : {$miesiac = $miesiace[2]; break;}
case 04 : {$miesiac = $miesiace[3]; break;}
case 05 : {$miesiac = $miesiace[4]; break;}
case 06 : {$miesiac = $miesiace[5]; break;}
case 07 : {$miesiac = $miesiace[6]; break;}
case 08 : {$miesiac = $miesiace[7]; break;}
case 09 : {$miesiac = $miesiace[8]; break;}
case 10 : {$miesiac = $miesiace[9]; break;}
case 11 : {$miesiac = $miesiace[10]; break;}
case 12 : {$miesiac = $miesiace[11]; break;}
}

echo "Data urodzenia: ".$dzien.$miesiac.$rok."plec: ".$plec;
}
 

?>



<?php
if ($_POST[przycisk]== true) {
pesel ($_POST[pole1]);
}

?>
