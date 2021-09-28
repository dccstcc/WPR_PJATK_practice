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
	
	$query = 'select * from osoba';
	
	if (!$result = mysql_query($query, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	echo '</body></html>';
	exit;
	}
?>

<table>
<tr>
<td>Id</td>
<td>Imie</td>
<td>Nazwisko</td>	
<td>Rok urodzenia</td>
<td>Miejsce urodzenia</td>
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