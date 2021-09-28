Kalkulator
<br /> <br />
Prosty

<FORM action="" method="POST">
<INPUT TYPE=TEXT NAME="pole1">
<SELECT NAME="opcja" SIZE="1">   
<OPTION VALUE=Dodawanie> Dodawanie </OPTION>
<OPTION VALUE=Odejmowanie> Odejmowanie </OPTION>
<OPTION VALUE=Mno¿enie> Mno¿enie </OPTION>
<OPTION VALUE=Dzielenie> Dzielenie </OPTION>
</SELECT> 
<INPUT TYPE=TEXT NAME="pole2">
<INPUT TYPE=SUBMIT VALUE="oblicz" NAME="oblicz"> 
</FORM>

<?php

if ($_POST[oblicz] == TRUE)
{
	$liczba1 = $_POST[pole1];
	$liczba2 = $_POST[pole2];
	$dzialanie = $_POST[opcja];
	SWITCH ($dzialanie)
	{
		case Dodawanie: $wartosc = $liczba1 + $liczba2 ;break;
		case Odejmowanie: $wartosc = $liczba1 - $liczba2 ;break;
		case Mno¿enie: $wartosc = $liczba1 * $liczba2 ;break;
		case Dzielenie: $wartosc = $liczba1 / $liczba2 ;break;
	}
	echo "Wynik to: ";
	echo "$wartosc";
}
?>

<br /><br /><br />Zaawansowany<br />
<FORM action="" method="POST">
<INPUT TYPE=TEXT NAME="pole">
<SELECT NAME="wybor" SIZE="1">   
<OPTION VALUE=cos> cos </OPTION>
<OPTION VALUE=sin> sin </OPTION>
<OPTION VALUE=tg> tg </OPTION>
<OPTION VALUE=dnb> dziesiêtne na binarne </OPTION>
<OPTION VALUE=bnd> binarne na dziesiêtne </OPTION>
<OPTION VALUE=dns> dziesiêtne na szesnatskowe </OPTION>
<OPTION VALUE=snd> szesnastkowe na dziesiêtne </OPTION>
<OPTION VALUE=snr> stopnie na radiany </OPTION>
<OPTION VALUE=rns> radiany na stopnie </OPTION>
<INPUT TYPE=SUBMIT VALUE="oblicz" NAME="oblicz2"> 
</SELECT>
</FORM>

<?php

if ($_POST[oblicz2] == TRUE)
{
	$liczba = $_POST[pole];
	$dzialanie = $_POST[wybor];
	SWITCH ($dzialanie)
	{
		case cos: $wynik = cos($liczba) ;break;
		case sin: $wynik = sin($liczba) ;break;
		case tg: $wynik = tan($liczba) ;break;
		case dnb: $wynik = decbin($liczba) ;break;
		case bnd: $wynik = bindec($liczba) ;break;
		case dns: $wynik = dechex($liczba) ;break;
		case snd: $wynik = hexdec($liczba) ;break;
		case snr: $wynik = deg2rad($liczba) ;break;
		case rns: $wynik = rad2deg($liczba) ;break;
	}
	echo "Wynik to: ";
	echo "$wynik";
}

?>