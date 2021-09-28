<body>
<form id="formularz" class="formularz" action="rejestracja.php" method="post">
<fieldset>
<legend>rejestracja</legend>
<label for="login">login:</label>
<div><input id="login" name="login" type="text" class="required" minlength="3"/></div>
<label for="email">adres e-mail:</label>
<div><input id="email" name="email" type="text" class="required email"/></div>
<label for="haslo">Haslo:</label>
<div><input name="pass" type="password" class="required" minlength="6" id="haslo"/></div>
<label for="haslo2">Powtorz haslo:</label>
<div><input name="pass2" type="password" class="required" id="haslo2" minlength="6" equalTo="#haslo"/></div>
<input class="submit" type="submit" value="Wyslij"/>
</fieldset>
</form>






