<?php
class Stats
{

public $dbo;
public $dsn;
public $result;

public function __construct($uzytkownik, $haslo, $dbname, $host)
{	
$dsn = "mysql:host=".$host.";dbname=".$dbname;

try {
	$dbo = new PDO($dsn, $uzytkownik, $haslo);
}
catch (PDOException $e) {
echo 'Blad polaczenia: '.$e->getMessage();
exit;
}
echo 'nawiazano polaczenie z baza danych';
echo '<br />';
}

public function insert($sql) {
$query = $sql;


$result = $dbo->exec($query);

echo "test";

if($result == false) {
echo "Nie moge wykonac zapytania.<br />";
}
else {
echo 'Liczba dodanych rekordow: '.$result;
}
return $result;
}

public function select ($sql) {
$query = $sql;
$result = $dbo->query($query);


if(!$result) {
echo "Nie moge wykonac zapytania.<br />";
echo '</div></body></html>';
exit;
}
return $result;
}

}
?>