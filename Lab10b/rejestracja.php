<?php
if (!$db_lnk = mysql_connect("localhost", "s12623", "Dom.Stec")) {
	exit('Wystapil blad podczas proby polaczenia z serwerem MySql...<br />');
	}
	else {
	echo 'Polaczenie z baza danych zostalo nawiazane ... <br />';
	}

	if(!mysql_select_db('s12623', $db_lnk)) {
	echo 'Wystapil blad podczas wyboru bazy danych: s12623 <br />';
	}
	else {
	echo 'Zostala wybrana baza danych: s12623 <br />';
	}
	
	
	
	if ($_POST[login]) {
	$name = $_POST[login];
	$email = $_POST[email];
	$pass = $_POST[pass];
	$pass2 = $_POST[pass2];
	
	if ($pass != $pass2) {
	echo "podane hasla ró¿ni¹ siê";
	}
	else {
	
	//sprawdzenie czy istnieje u¿tkownik o zadanej nazwie lub emailu
	$query = "select count(*) from users where nazwa='$name'";
	$query2 = "select count(*) from users where nazwa='$email'";
	
	if (!$result = mysql_query($query, $db_lnk)) {
	echo 'Wystapil blad: nieprawidlowe zapytanie o nazwe... <br />';
	}
	if (!$result2 = mysql_query($query2, $db_lnk)) {
	echo 'Wystapil blad: nieprawidlowe zapytanie o email... <br />';
	}
	
	$row = mysql_fetch_row($result);
	$row2 = mysql_fetch_row($result2);
	
	if ($row[0] >= 1 || $row2[0] >= 1) {
	echo "W bazie danych istnieje juz u¿ytkownik o tej nazwie lub emailu";
	}
	else {
	$query = "insert into users (nazwa, haslo, email) values ('$name', '$pass', '$email')";
	echo "Uzytkownik zostal dodany. <br/>";
	if (!$result = mysql_query($query, $db_lnk)) {
	echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	}
	}
}
	
}
	
	
	
if(!mysql_close($db_lnk)) {
	echo 'Wystapil blad podczas zamykania polaczenia z serwerem MySQL... <br />';
	}
	else{
	echo 'Polaczenie z serwerem MySQL zostalo zamkniete... <br />';
	}
?>