<?php
if (isSet($_POST['opinia'])) {
//if ($POST_[przycisk]) ustawia odswiezanie strony
$str = substr ($_POST['opinia'], 0, 255);
$str - strip_tags($str);
if($str != "") {
$str = date("Y-m-d G:i:s")."  ".$str;
$old_str = file_get_contents ("./starewpisy.txt");
file_put_contents ("./starewpisy.txt", "$str\n");
file_put_contents ("./starewpisy.txt", "$old_str\n", FILE_APPEND);
}
}
?>

<form action="" method="POST">
Wyra� swoj� opini�: <br />
(maksymalnie 255 znak�w) <br />
<textarea name="opinia">
</textarea>
<br />
<input type="submit" name="przycisk" value="wyslij" >
</form>

Dotychczasowe opinie:
<br /><br />

<?php
$str = "";
if (file_exists("./starewpisy.txt")) {
$str = file_get_contents('./starewpisy.txt');
$str = strip_tags($str);
$str = nl2br($str);
}
if ($str != "") {
echo $str;
}
else {
echo "Brak opinii. Mozesz dodac pierwsza"; 
}
?>