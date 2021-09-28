<?php
if (isSet($_POST['opinia'])) {
//if ($POST_[przycisk]) ustawia odswiezanie strony
$str = substr ($_POST['opinia'], 0, 255);
$str - strip_tags($str);
if($str != "") {
file_put_contents ("./komentarze.txt", "$str\n", FILE_APPEND);
}
}

?>

<form action="" method="POST">
WyraŸ swoj¹ opiniê: <br />
(maksymalnie 255 znaków) <br />
<textarea name="opinia">
</textarea>
<br />
<input type="submit" name="przycisk" value="wyslij" >
</form>

Dotychczasowe opinie:
<br /><br />

<?php
$str = "";
if (file_exists("./komentarze.txt")) {
$str = file_get_contents('./komentarze.txt');
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