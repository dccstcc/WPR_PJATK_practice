<?php
function checkPass($user,$pass) {
if (!$db_lnk = mysql_connect("localhost", "s12623", "Dom.Stec")) {
	//exit('Wystapil blad podczas proby polaczenia z serwerem MySql...<br />');
	}
	else {
	//echo 'Polaczenie z baza danych zostalo nawiazane ... <br />';
	}

	if(!mysql_select_db('s12623', $db_lnk)) {
	//echo 'Wystapil blad podczas wyboru bazy danych: s12623 <br />';
	}
	else {
	//echo 'Zostala wybrana baza danych: s12623 <br />';
	}
	
	$query = "select haslo from users where nazwa=$user";
	
	if (!$result = mysql_query($query, $db_lnk)) {
	//mysql_close();
	//echo 'Wystapil blad: nieprawidlowe zapytanie... <br />';
	//exit;
	}
	
	$row = mysql_fetch_row($result);
	if ($row[0] === $pass) { 
	return true;
	}
	else {
	return false;
	}
	
if(!mysql_close($db_lnk)) {
	//echo 'Wystapil blad podczas zamykania polaczenia z serwerem MySQL... <br />';
	}
	else{
	//echo 'Polaczenie z serwerem MySQL zostalo zamkniete... <br />';
	}
}

session_start();
if (isSet ($_SESSION['zalogowany'])) {
	header("Location: glowna.php");
	exit();
}
else if (isSet($_POST['user']) && isSet($_POST['haslo'])) {
	if (checkPass($_POST['user'], $_POST['haslo'])) {
	$_SESSION['zalogowany'] = $_POST['user'];
	header ("Location: glowna.php");
	exit ();
}
else {
 $komunikat = "Niepoprawne dane logowania.";
 }
 }
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
 <title>logowanie uzytkowników</title>
 </head>
 <body>
 <div>
 <form action="./indeks3.php"
		method="post">
<?php
if (isSet ($komunikat)):
?>
<div><?php echo $komunikat; ?></div>
<?php
endif;
?>
<table border="0"><tr>
<td>uzytkownik:</td>
<td>
<input type="text" name="user" />
</td>
</tr><tr>
<td>Haslo:</td>
<td>
<input type="password" name="haslo" ?>
</td>
</tr><tr>
<td colspan="2" align="center">
<input type="submit" value="Wejde" />
</td>
</tr></table>
</form>
</div>
</body>
</html>

	