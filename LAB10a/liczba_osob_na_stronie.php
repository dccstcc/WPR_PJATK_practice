<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<title>Moja strona WWW</title>
</head>

<body>
<p>Licznik odwiedzin strony</p>
<div>

<?php

function visitsCount($timeout) {

if (!$db_lnk = mysql_connect("localhost", "s12623", "Dom.Stec")) {
	exit('Wystapil blad podczas proby polaczenia z serwerem MySql...<br />');
	return false;
	}
	else {
	echo 'Polaczenie z baza danych zostalo nawiazane ... <br />';
	}

	if(!mysql_select_db('s12623', $db_lnk)) {
	echo 'Wystapil blad podczas wyboru bazy danych: s12623 <br />';
	return false;
	}
	else {
	echo 'Zostala wybrana baza danych: s12623 <br />';
	}
	
	$t = time();
	$query = "insert into czas_wizyt values ($t)";
	
	if (!$result = mysql_query($query, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	exit;
	}
	
	$t2 = $t - $timeout;
	
	$query_del = "delete from czas_wizyt where czas<$t2"; 
	
	if (!$result = mysql_query($query_del, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	exit;
	}
	
	$query_select = 'select count(*) from czas_wizyt';
	
	if (!$result = mysql_query($query_select, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	exit;
	}
	
	$row= mysql_fetch_row($result);
	$liczba_osob = $row[0];
	
if(!mysql_close($db_lnk)) {
	echo 'Wystapil blad podczas zamykania polaczenia z serwerem MySQL... <br />';
	return false;
	}
	else{
	echo 'Polaczenie z serwerem MySQL zostalo zamkniete... <br />';
	}
	
	return $liczba_osob;
}
$timeout = 10;
if(($ile = visitsCount($timeout)) !== false) {
echo "Liczba osob na stronie w ciagu ostatnich ";
echo "$timeout sekund: $ile";
}
else {
echo "Licznik ostanich wizyt nie jst dostepny";
}
?>
</div>
</body>
</html>