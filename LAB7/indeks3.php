<?php
session_start();
if (isSet ($_SESSION['zalogowany'])) {
	header("Location: glowna.php");
	exit();
}
else if (isSet($_POST['user']) && isSet($_POST['haslo'])) {
	if ($_POST['user'] == 'user1' && $_POST['haslo'] == 'pass1') {
	$_SESSION['zalogowany'] = 'user1';
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

	