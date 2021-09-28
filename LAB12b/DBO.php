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
while ($row = $result->fetch(PDO::FETCH_NUM)) {
echo "<tr>\n";
echo "<td>{$row[0]}</td>\n";
echo "<td>{$row[1]}</td>\n";
echo "<td>{$row[2]}</td>\n";
echo "<td>{$row[3]}</td>\n";
echo "<td>{$row[4]}</td>\n";
echo "</tr>\n";
}
$dbo = null;
?>
