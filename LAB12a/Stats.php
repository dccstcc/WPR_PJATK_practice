<?php
class Stats
{
private $connect;

public function __construct($adres, $uzytkownik, $haslo, $bazaDanych)
{	
if (!$db_lnk = mysql_connect($adres, $uzytkownik, $haslo)) {
	exit('Wystapil blad podczas proby polaczenia z serwerem MySql...<br />');
	}
	else {
	echo 'Polaczenie z baza danych zostalo nawiazane ... <br />';
	$this->connect = $db_lnk;
	}
	
	if(!mysql_select_db($bazaDanych, $db_lnk)) {
	echo 'Wystapil blad podczas wyboru bazy danych: s12623 <br />';
	}
	else {
	
echo 'Zostala wybrana baza danych: s12623 <br />';
	}
}

public function insert($sql) {
$conn = $this->connect;
if(!$result = mysql_query($sql, $conn)) {
echo "Nieprawidlowe zapytanie";
}
}

public function select ($sql) {
$conn = $this->connect;
$dane = array();
$result = mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
$dane[] = $row;
}
return $dane;
}

}
?>