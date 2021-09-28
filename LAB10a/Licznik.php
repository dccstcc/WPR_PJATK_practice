<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<title>Moja strona WWW</title>
</head>

<body>
<p>Tresc strony</p>
<p>

<?php

function getAndUpdateCounter() {

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
	
	$query = 'select hits from licznik';
	
	if (!$result = mysql_query($query, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	//echo '</p></body></html>';
	//exit;
	return false;
	}
	
	$row=mysql_fetch_row($result);
	$licznik = $row[0];
	$update = 'update licznik set hits = hits+1';
	 
	 if (!$result = mysql_query($update, $db_lnk)) {
	mysql_close();
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	return false;
	}
	
if(!mysql_close($db_lnk)) {
	echo 'Wystapil blad podczas zamykania polaczenia z serwerem MySQL... <br />';
	return false;
	}
	else{
	echo 'Polaczenie z serwerem MySQL zostalo zamkniete... <br />';
	}
	return $licznik;
}

if(($counter = getAndUpdateCounter()) === false) {
echo 'Licznik czasowo niedostepny';
}
else if ($counter == 1) {
echo 'Ta strona zostala odwiedzona 1 raz od 20 maja 2012 roku';
}
else {
echo "Ta strona zostala odwiedzona $counter razy od 20 maja 2012 roku";
}
?>
</p>
</body>
</html>