<?php

$dsn = 'mysql:host=localhost;dbname=s12623';
$uzytkownik = 's12623';
$haslo = 'Dom.Stec';
try {
	$dbo = new PDO($dsn, $uzytkownik, $haslo);
}
catch (PDOException $e) {
echo 'Blad polaczenia: '.$e->getMessage();
echo '</div></body></html>';
exit;
}

$query = "select * from osoba";
$result = $dbo->query($query);

if(!$result) {
echo "Nie moge wykonac zapytania.<br />";
echo '</div></body></html>';
exit;
}
?>
<table>
<tr>
<td>Id</td><td>Imie</td><td>Nazwisko</td><td>Rok urodzenia</td><td>Miejsce urodzenia</td>
</tr>
<?php
while ($row = $result->fetch(PDO::FETCH_OBJ)) {
echo "<tr>\n";
echo "<td>{$row->id}</td>\n";
echo "<td>{$row->imie}</td>\n";
echo "<td>{$row->nazwisko}</td>\n";
echo "<td>{$row->rok_urodzenia}</td>\n";
echo "<td>{$row->miejsce_urodzenia}</td>\n";
echo "</tr>\n";
}
$dbo = null;
?>
