<form>
<input type="file" name="plik" size="50">
<br />
Wysokosc
<input type=text name=wysokosc>
<br />
Szerokosc
<input type=text name=szerokosc>
<br />
<input type=submit name="wyslij" value="zmien">
</form>

<?php
if($_POST['plik']) {
$obraz = imagecreatefrojpeg('plik');
}

if ($_POST['wyslij']) {

}
?>