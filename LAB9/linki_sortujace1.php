<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<title>Odczyt danych z bazy</title>
</head>

<body>
<?php
if (!$db_lnk = mysql_connect("localhost", "s12623", "Dom.Stec")) {
	exit('Wystapil blad podczas proby polaczenia z serwerem MySql...<br />');
	echo '</body></html>';
	}
	else {
	echo 'Polaczenie z baza danych zostalo nawiazane ... <br />';
	}

	if(!mysql_select_db('s12623', $db_lnk)) {
	echo 'Wystapil blad podczas wyboru bazy danych: s12623 <br />';
	echo '</body></html>';
	}
	else {
	echo 'Zostala wybrana baza danych: s12623 <br />';
	}
	
	$nr = $_GET['sortID'];
	
	//$kolumna = Array('ID', 'Imie
	
	if (isset($_GET['sortID'])) {
	$query = "select * from osoba order by $nr";
	}
	else {
	$nr=1;
	$query = "select * from osoba order by $nr";
	}
	
	echo "Sortowanie wg kolumny nr $nr";
	
	if (!$result = mysql_query($query, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	echo '</body></html>';
	exit;
	}
?>

<table>
<tr>
<td><a href = "linki_sortujace1.php?sortID=1">ID </a></td>
<td><a href = "linki_sortujace1.php?sortID=2">Imie</a></td>
<td><a href = "linki_sortujace1.php?sortID=3">Nazwisko</a></td>	
<td><a href = "linki_sortujace1.php?sortID=4">Rok urodzenia</a></td>
<td><a href = "linki_sortujace1.php?sortID=5">Miejsce urodzenia</a></td>
</tr>

<?php	

while($row = mysql_fetch_row($result)) {
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
}
?>

</table>

<?php
	
if(!mysql_close($db_lnk)) {
	echo 'Wystapil blad podczas zamykania polaczenia z serwerem MySQL... <br />';
	}
	else{
	echo 'Polaczenie z serwerem MySQL zostalo zamkniete... <br />';
	}
?>

</body>
</html>