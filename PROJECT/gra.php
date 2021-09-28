<?php

//ustawiam przycisk reset
if (isset($_GET['reset'])) {
	include 'START_GRY.php';
}
else {
	
session_start();


//zmienne flagi uzyte na koncu kodu w celu wyrejestrowania zmiennych super globalnych z tablicy sesyjnej
$flagakrzyzyk = false;
$flagakolko = false;


//sprawdza czy ktos postawil krzyzyk i ustawia wtedy wartosc true w sesyjnej zmiennej tablicy super globalnej
if (isset($_GET['pole1_x'])) {
$_SESSION['boolpole1']=true; }

if (isset($_GET['pole2_x'])) {
$_SESSION['boolpole2']=true;
}

if (isset($_GET['pole3_x'])) {
$_SESSION['boolpole3']=true;
}

if (isset($_GET['pole4_x'])) {
$_SESSION['boolpole4']=true;
}

if (isset($_GET['pole5_x'])) {
$_SESSION['boolpole5']=true;
}

if (isset($_GET['pole6_x'])) {
$_SESSION['boolpole6']=true;
}

if (isset($_GET['pole7_x'])) {
$_SESSION['boolpole7']=true;
}

if (isset($_GET['pole8_x'])) {
$_SESSION['boolpole8']=true;
}

if (isset($_GET['pole9_x'])) {
$_SESSION['boolpole9']=true;
}

do {
	
	// od drugiego postawienia krzyzyka wykonywana jest ponizsza czesc kodu
	

if ($_SESSION['boolpole1'] && $_SESSION['boolpole2'] || $_SESSION['boolpole1'] && $_SESSION['boolpole3'] || $_SESSION['boolpole1'] && $_SESSION['boolpole4'] || $_SESSION['boolpole1'] && $_SESSION['boolpole5'] || $_SESSION['boolpole1'] && $_SESSION['boolpole6'] || $_SESSION['boolpole1'] && $_SESSION['boolpole7'] || $_SESSION['boolpole1'] && $_SESSION['boolpole8'] || $_SESSION['boolpole1'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole2'] && $_SESSION['boolpole3'] || $_SESSION['boolpole2'] && $_SESSION['boolpole4'] || $_SESSION['boolpole2'] && $_SESSION['boolpole5'] || $_SESSION['boolpole2'] && $_SESSION['boolpole6'] || $_SESSION['boolpole2'] && $_SESSION['boolpole7'] || $_SESSION['boolpole2'] && $_SESSION['boolpole8'] || $_SESSION['boolpole2'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole3'] && $_SESSION['boolpole4'] || $_SESSION['boolpole3'] && $_SESSION['boolpole5'] || $_SESSION['boolpole3'] && $_SESSION['boolpole6'] || $_SESSION['boolpole3'] && $_SESSION['boolpole7'] || $_SESSION['boolpole3'] && $_SESSION['boolpole8'] || $_SESSION['boolpole3'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole4'] && $_SESSION['boolpole5'] || $_SESSION['boolpole4'] && $_SESSION['boolpole6'] || $_SESSION['boolpole4'] && $_SESSION['boolpole7'] || $_SESSION['boolpole4'] && $_SESSION['boolpole8'] || $_SESSION['boolpole4'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole5'] && $_SESSION['boolpole6'] || $_SESSION['boolpole5'] && $_SESSION['boolpole7'] || $_SESSION['boolpole5'] && $_SESSION['boolpole8'] || $_SESSION['boolpole5'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole6'] && $_SESSION['boolpole7'] || $_SESSION['boolpole6'] && $_SESSION['boolpole8'] || $_SESSION['boolpole6'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole7'] && $_SESSION['boolpole8'] || $_SESSION['boolpole7'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole8'] && $_SESSION['boolpole9']) {
	
//sprawdza czy na polu 1 nie zostalo postawione kolko zanim postawi krzyzyk, jesli jest kolko zostawia kolko
	if (isset($_GET['pole1_x'])) {
	
	if($_SESSION['pole1'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}

// zostawia kolko albo stawia krzyzyk na polu 1, nastepnie wylacza to pole wyboru
$_SESSION['pole1'] = $pom;
$_SESSION['aktywacja1'] = 'img';

//losuje kolko z drugiego skryptu
include 'losujkolko2.php';
}

// ponizej wykonywane sa analogiczne do powyzszych czynosci stawiania kolka  i krzyzyka  dla wszystkich 9 pol
	if (isset($_GET['pole2_x'])) {
	
	if($_SESSION['pole2'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole2'] = $pom;
$_SESSION['aktywacja2'] = 'img';

include 'losujkolko2.php';
}

	
	if (isset($_GET['pole3_x'])) {
	
	if($_SESSION['pole3'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole3'] = $pom;
$_SESSION['aktywacja3'] = 'img';

include 'losujkolko2.php';
}


	if (isset($_GET['pole4_x'])) {
	
	if($_SESSION['pole4'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole4'] = $pom;
$_SESSION['aktywacja4'] = 'img';

include 'losujkolko2.php';
}


	if (isset($_GET['pole5_x'])) {
	
	if($_SESSION['pole5'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole5'] = $pom;
$_SESSION['aktywacja5'] = 'img';

include 'losujkolko2.php';
}


	if (isset($_GET['pole6_x'])) {
	
	if($_SESSION['pole6'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole6'] = $pom;
$_SESSION['aktywacja6'] = 'img';

include 'losujkolko2.php';
}


	if (isset($_GET['pole7_x'])) {
	
	if($_SESSION['pole7'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole7'] = $pom;
$_SESSION['aktywacja7'] = 'img';

include 'losujkolko2.php';
}


	if (isset($_GET['pole8_x'])) {
	
	if($_SESSION['pole8'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole8'] = $pom;
$_SESSION['aktywacja8'] = 'img';

include 'losujkolko2.php';
}


	if (isset($_GET['pole9_x'])) {
	
	if($_SESSION['pole9'] == 'czarnepolekolko.jpg') {
	$pom = 'czarnepolekolko.jpg';
	}
	else  {
		$pom = 'czarnepolekrzyzyk.jpg';
	}
	
$_SESSION['pole9'] = $pom;
$_SESSION['aktywacja9'] = 'img';

include 'losujkolko2.php';
}


// sprawdza czy gra sie zakonczyla i czy wygral uzytkownik (krzyzyk)

if (($_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg')
|| ($_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg'))
{ 


// gdy gra sie zakonczyla dezaktuwuje wszystkie pola
$_SESSION['aktywacja1'] = 'img';
$_SESSION['aktywacja2'] = 'img';
$_SESSION['aktywacja3'] = 'img';
$_SESSION['aktywacja4'] = 'img';
$_SESSION['aktywacja5'] = 'img';
$_SESSION['aktywacja6'] = 'img';
$_SESSION['aktywacja7'] = 'img';
$_SESSION['aktywacja8'] = 'img';
$_SESSION['aktywacja9'] = 'img';


//wczytuje obrazki przekreslajace krzyzyki
include 'konieckrzyzyk.php';


//sprawdza czy zostaly zaznaczone trzy sasiednie pola w poziomie, pionie czy ukosnie i przekresla je
if ($_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole1'] = 'poziomakreskakrzyzyk.jpg';
$_SESSION['pole2'] = 'poziomakreskakrzyzyk.jpg';
$_SESSION['pole3'] = 'poziomakreskakrzyzyk.jpg';
}
else if ($_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole4'] = 'poziomakreskakrzyzyk.jpg';
$_SESSION['pole5'] = 'poziomakreskakrzyzyk.jpg';
$_SESSION['pole6'] = 'poziomakreskakrzyzyk.jpg';
}
else if ($_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole7'] = 'poziomakreskakrzyzyk.jpg';
$_SESSION['pole8'] = 'poziomakreskakrzyzyk.jpg';
$_SESSION['pole9'] = 'poziomakreskakrzyzyk.jpg';
}
else if ($_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole4'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole1'] = 'pionowakreskakrzyzyk.jpg';
$_SESSION['pole4'] = 'pionowakreskakrzyzyk.jpg';
$_SESSION['pole7'] = 'pionowakreskakrzyzyk.jpg';
}
else if ($_SESSION['pole2'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole8'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole2'] = 'pionowakreskakrzyzyk.jpg';
$_SESSION['pole5'] = 'pionowakreskakrzyzyk.jpg';
$_SESSION['pole8'] = 'pionowakreskakrzyzyk.jpg';
}
else if ($_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole6'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole3'] = 'pionowakreskakrzyzyk.jpg';
$_SESSION['pole6'] = 'pionowakreskakrzyzyk.jpg';
$_SESSION['pole9'] = 'pionowakreskakrzyzyk.jpg';
}
else if ($_SESSION['pole1'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole9'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole1'] = 'backslashkrzyzyk.jpg';
$_SESSION['pole5'] = 'backslashkrzyzyk.jpg';
$_SESSION['pole9'] = 'backslashkrzyzyk.jpg';
}
else if ($_SESSION['pole7'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole5'] == 'czarnepolekrzyzyk.jpg' && $_SESSION['pole3'] == 'czarnepolekrzyzyk.jpg') {
$_SESSION['pole7'] = 'slashkrzyzyk.jpg';
$_SESSION['pole5'] = 'slashkrzyzyk.jpg';
$_SESSION['pole3'] = 'slashkrzyzyk.jpg';
}

//drukuje wysrodkowany napis wygrana
echo "
<table align=center>
<td>
<strong>******************* WYGRANA *******************</strong>
</td>
</table>
</form>
<br />
"; 

$flagakrzyzyk = true;
}



// jezeli nie wygral uzytkownik sprawdza czy gra sie zakonczyla i czy wygral komputer (kolko)

else if (($_SESSION['pole1'] == 'czarnepolekolko.jpg' && $_SESSION['pole2'] == 'czarnepolekolko.jpg' && $_SESSION['pole3'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole4'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole6'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole7'] == 'czarnepolekolko.jpg' && $_SESSION['pole8'] == 'czarnepolekolko.jpg' && $_SESSION['pole9'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole1'] == 'czarnepolekolko.jpg' && $_SESSION['pole4'] == 'czarnepolekolko.jpg' && $_SESSION['pole7'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole2'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole8'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole3'] == 'czarnepolekolko.jpg' && $_SESSION['pole6'] == 'czarnepolekolko.jpg' && $_SESSION['pole9'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole1'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole9'] == 'czarnepolekolko.jpg')
|| ($_SESSION['pole7'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole3'] == 'czarnepolekolko.jpg'))
{ 


// gdy gra sie zakonczyla dezaktuwuje wszystkie pola
$_SESSION['aktywacja1'] = 'img';
$_SESSION['aktywacja2'] = 'img';
$_SESSION['aktywacja3'] = 'img';
$_SESSION['aktywacja4'] = 'img';
$_SESSION['aktywacja5'] = 'img';
$_SESSION['aktywacja6'] = 'img';
$_SESSION['aktywacja7'] = 'img';
$_SESSION['aktywacja8'] = 'img';
$_SESSION['aktywacja9'] = 'img';


//wczytuje obrazki przekreslajace kolko
include 'konieckolko.php';


//sprawdza czy zostaly zaznaczone trzy sasiednie pola w poziomie, pionie czy ukosnie i przekresla je
if ($_SESSION['pole1'] == 'czarnepolekolko.jpg' && $_SESSION['pole2'] == 'czarnepolekolko.jpg' && $_SESSION['pole3'] == 'czarnepolekolko.jpg') {
$_SESSION['pole1'] = 'poziomakreskakolko.jpg';
$_SESSION['pole2'] = 'poziomakreskakolko.jpg';
$_SESSION['pole3'] = 'poziomakreskakolko.jpg';
}
else if ($_SESSION['pole4'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole6'] == 'czarnepolekolko.jpg') {
$_SESSION['pole4'] = 'poziomakreskakolko.jpg';
$_SESSION['pole5'] = 'poziomakreskakolko.jpg';
$_SESSION['pole6'] = 'poziomakreskakolko.jpg';
}
else if ($_SESSION['pole7'] == 'czarnepolekolko.jpg' && $_SESSION['pole8'] == 'czarnepolekolko.jpg' && $_SESSION['pole9'] == 'czarnepolekolko.jpg') {
$_SESSION['pole7'] = 'poziomakreskakolko.jpg';
$_SESSION['pole8'] = 'poziomakreskakolko.jpg';
$_SESSION['pole9'] = 'poziomakreskakolko.jpg';
}
else if ($_SESSION['pole1'] == 'czarnepolekolko.jpg' && $_SESSION['pole4'] == 'czarnepolekolko.jpg' && $_SESSION['pole7'] == 'czarnepolekolko.jpg') {
$_SESSION['pole1'] = 'pionowakreskakolko.jpg';
$_SESSION['pole4'] = 'pionowakreskakolko.jpg';
$_SESSION['pole7'] = 'pionowakreskakolko.jpg';
}
else if ($_SESSION['pole2'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole8'] == 'czarnepolekolko.jpg') {
$_SESSION['pole2'] = 'pionowakreskakolko.jpg';
$_SESSION['pole5'] = 'pionowakreskakolko.jpg';
$_SESSION['pole8'] = 'pionowakreskakolko.jpg';
}
else if ($_SESSION['pole3'] == 'czarnepolekolko.jpg' && $_SESSION['pole6'] == 'czarnepolekolko.jpg' && $_SESSION['pole9'] == 'czarnepolekolko.jpg') {
$_SESSION['pole3'] = 'pionowakreskakolko.jpg';
$_SESSION['pole6'] = 'pionowakreskakolko.jpg';
$_SESSION['pole9'] = 'pionowakreskakolko.jpg';
}
else if ($_SESSION['pole1'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole9'] == 'czarnepolekolko.jpg') {
$_SESSION['pole1'] = 'backslashkolko.jpg';
$_SESSION['pole5'] = 'backslashkolko.jpg';
$_SESSION['pole9'] = 'backslashkolko.jpg';
}
else if ($_SESSION['pole7'] == 'czarnepolekolko.jpg' && $_SESSION['pole5'] == 'czarnepolekolko.jpg' && $_SESSION['pole3'] == 'czarnepolekolko.jpg') {
$_SESSION['pole7'] = 'slashkolko.jpg';
$_SESSION['pole5'] = 'slashkolko.jpg';
$_SESSION['pole3'] = 'slashkolko.jpg';
}


//drukuje wysrodkowany napis przegrana
echo "
<table align=center>
<td>
<strong>____________________ PRZEGRANA ____________________</strong>
</td>
</table>
</form>
<br />
"; 

$flagakolko = true;
}

//w razie gdy nikt nie wygra a gra sie zakonczy przerywa petle
else if ($_SESSION['aktywacja1'] == 'img' &&
$_SESSION['aktywacja2'] == 'img' &&
$_SESSION['aktywacja3'] == 'img' &&
$_SESSION['aktywacja4'] == 'img' &&
$_SESSION['aktywacja5'] == 'img' &&
$_SESSION['aktywacja6'] == 'img' &&
$_SESSION['aktywacja7'] == 'img' &&
$_SESSION['aktywacja8'] == 'img' &&
$_SESSION['aktywacja9'] == 'img') {

//drukuje wysrodkowany napis remis
echo "
<table align=center>
<td>
<strong><><><><><><><><><> REMIS <><><><><><><><><></strong>
</td>
</table>
</form>
<br />
"; 


include 'formularz.php';
$flagakrzyzyk = true;
$flagakolko = true;
break;
}

// wczytuje formularz i podstawia w nim zmienne w znaczniku HTML czyniac pole wyboru aktywnym lub nie oraz wczytujac w to pole odpowiedni obrazek (kolko, krzyzyk, puste, przkreslone)
include 'formularz.php';
}


	
	
	// przerywa dzialanie petli aby wykonywala sie tylko powyzsza czesc kodu (od drugiego ruchu)
if($_SESSION['boolpole1'] && $_SESSION['boolpole2'] || $_SESSION['boolpole1'] && $_SESSION['boolpole3'] || $_SESSION['boolpole1'] && $_SESSION['boolpole4'] || $_SESSION['boolpole1'] && $_SESSION['boolpole5'] || $_SESSION['boolpole1'] && $_SESSION['boolpole6'] || $_SESSION['boolpole1'] && $_SESSION['boolpole7'] || $_SESSION['boolpole1'] && $_SESSION['boolpole8'] || $_SESSION['boolpole1'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole2'] && $_SESSION['boolpole3'] || $_SESSION['boolpole2'] && $_SESSION['boolpole4'] || $_SESSION['boolpole2'] && $_SESSION['boolpole5'] || $_SESSION['boolpole2'] && $_SESSION['boolpole6'] || $_SESSION['boolpole2'] && $_SESSION['boolpole7'] || $_SESSION['boolpole2'] && $_SESSION['boolpole8'] || $_SESSION['boolpole2'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole3'] && $_SESSION['boolpole4'] || $_SESSION['boolpole3'] && $_SESSION['boolpole5'] || $_SESSION['boolpole3'] && $_SESSION['boolpole6'] || $_SESSION['boolpole3'] && $_SESSION['boolpole7'] || $_SESSION['boolpole3'] && $_SESSION['boolpole8'] || $_SESSION['boolpole3'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole4'] && $_SESSION['boolpole5'] || $_SESSION['boolpole4'] && $_SESSION['boolpole6'] || $_SESSION['boolpole4'] && $_SESSION['boolpole7'] || $_SESSION['boolpole4'] && $_SESSION['boolpole8'] || $_SESSION['boolpole4'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole5'] && $_SESSION['boolpole6'] || $_SESSION['boolpole5'] && $_SESSION['boolpole7'] || $_SESSION['boolpole5'] && $_SESSION['boolpole8'] || $_SESSION['boolpole5'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole6'] && $_SESSION['boolpole7'] || $_SESSION['boolpole6'] && $_SESSION['boolpole8'] || $_SESSION['boolpole6'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole7'] && $_SESSION['boolpole8'] || $_SESSION['boolpole7'] && $_SESSION['boolpole9']
|| $_SESSION['boolpole8'] && $_SESSION['boolpole9']) {
break;
}	


	//ponizsza czesc kodu wykonuje sie tylko przy pierwszym ruchu krzyzykiem i dla pierwszego losowania kolka


// ustawia krzyzyk na pierwszym polu , dezaktywuje to pole, ustawia pozostale pola jako puste i aktywne gdy uzytkownik wybral pierwsze pole 
if (isset($_GET['pole1_x'])) {
$_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole1'] = 'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja1'] = 'img';
$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

// losuje kolko z pierwszego skrytu
include 'losujkolko.php';
}
// wykonuje powyzsze czynnosci dla pozostalych pol
else if (isset($_GET['pole2_x'])) {
$_SESSION['pole1'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole2'] =  'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja2'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole3_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole3'] = 'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja3'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole4_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole4'] = 'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja4'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole5_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole5'] =  'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja5'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole6_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole7'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole6'] =  'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja6'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole7_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole8'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole7'] =  'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja7'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja8']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole8_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole9'] = 'czarnepole.jpg';
$_SESSION['pole8'] =  'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja8'] = 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja9']= 'input type="image" ';

include 'losujkolko.php';
}
else if (isset($_GET['pole9_x'])) {
$_SESSION['pole1'] = $_SESSION['pole2'] = $_SESSION['pole3'] = $_SESSION['pole4'] = $_SESSION['pole5'] = $_SESSION['pole6'] = $_SESSION['pole7'] = $_SESSION['pole8'] = 'czarnepole.jpg';
$_SESSION['pole9'] =  'czarnepolekrzyzyk.jpg';
$_SESSION['aktywacja9']= 'img';
$_SESSION['aktywacja1']=$_SESSION['aktywacja2']=$_SESSION['aktywacja3']=$_SESSION['aktywacja4']=$_SESSION['aktywacja5']=$_SESSION['aktywacja6']=$_SESSION['aktywacja7']=$_SESSION['aktywacja8']= 'input type="image" ';

include 'losujkolko.php';
}



// wczytuje formularz i podstawia w nim zmienne w znaczniku HTML czyniac pole wyboru aktynym lub nie oraz wczytujac w to pole odpowiedni obrazek (kolko, krzyzyk, puste, przkreslone)
include 'formularz.php';



}
// petla zastosowana w celu podzialu kodu na dwa fragmenty, gdzie dzialanie jednego blokuje drugi
while(false);

 
// wyrejestrowanie sesyjnych zmiennych super globalnych i zamkniecie sesji
if ($flagakrzyzyk || $flagakolko) {

unset($_SESSION['pole1']);
unset($_SESSION['pole2']);
unset($_SESSION['pole3']);
unset($_SESSION['pole4']);
unset($_SESSION['pole5']);
unset($_SESSION['pole6']);
unset($_SESSION['pole7']);
unset($_SESSION['pole8']);
unset($_SESSION['pole9']);

unset($_SESSION['boolpole1']);
unset($_SESSION['boolpole2']);
unset($_SESSION['boolpole3']);
unset($_SESSION['boolpole4']);
unset($_SESSION['boolpole5']);
unset($_SESSION['boolpole6']);
unset($_SESSION['boolpole7']);
unset($_SESSION['boolpole8']);
unset($_SESSION['boolpole9']);

unset($_SESSION['aktywacja1']);
unset($_SESSION['aktywacja2']);
unset($_SESSION['aktywacja3']);
unset($_SESSION['aktywacja4']);
unset($_SESSION['aktywacja5']);
unset($_SESSION['aktywacja6']);
unset($_SESSION['aktywacja7']);
unset($_SESSION['aktywacja8']);
unset($_SESSION['aktywacja9']);

session_destroy();
}

}
?>