<form action="" method="POST">
Dzien
<input type="TEXT" name="dzien"><br \>
Miesiac
<input type="TEXT" name="miesiac"><br \>
Rok
<input type="TEXT" name="rok"><br \>
<input type="SUBMIT" name="oblicz" value="oblicz">
</form>

<?php
$tablica = array ("poniedzialek", "wtorek", "sroda", "czwartek", "piatek", "sobota", "Niedziela");
if ($_POST[oblicz] == TRUE) {
$znacznik = mktime(0, 0, 0, $_POST[miesiac], $_POST[dzien], $_POST[rok]);
$dzien_tyg = date ("w", $znacznik);
$dzien_tygpl = $tablica[$dzien_tyg-1];
echo $_POST[dzien];
echo "&nbsp;";
echo $_POST[miesiac];
echo "&nbsp;";
echo $_POST[rok];
echo "&nbsp;";
echo "to&nbsp;";
echo $dzien_tygpl;
}
?>