<?php
if (!isSet ($_COOKIE['nazwa']) && !isSet($_POST['nazwa'])) {
include ("header.html");
include ("form.html");
include ("footer.html");
}
else if (isSet($_POST['nazwa'])) {
// brak kontroli popranosci danych
setCookie("nazwa", $_POST['nazwa'], time() + 60*60*24*365);
include ("header.html");
echo ("<p>Dziekujemy za podanie danych.</p>");
include ("footer.html");
}
else {
// brak kontroli danych
include ("header.html");
echo ("Witamy, zostales rozpoznany jako {$_COOKIE['nazwa']}.");
include ("footer.html");
}
?>