<?php

$dsn = 'mysql:host=localhost;dbname=s12623';
$uzytkownik = 's12623';
$haslo = 'Dom.Stec';
try {
	$dbo = new PDO($dsn, $uzytkownik, $haslo);
}
catch (PDOException $e) {
echo 'Blad polaczenia: '.$e->getMessage();
exit;
}

$query = "insert into osoba values (";
$query .= "0, 'Maciej', 'Nowak', 1982, 'Lublin'";
$query .= ")";

$result = $dbo->exec($query);

if($result == false) {
echo "Nie moge wykonac zapytania.<br />";
}
else {
echo 'Liczba dodanych rekordow: '.$result;
}

$dbo = null;
?>
