<?php
include "Stats.php";
$obiekt = new Stats('localhost', 's12623', 'Dom.Stec', 's12623');
$data = date ("d-m-Y G:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$browse = $_SERVER ["HTTP_USER_AGENT"];
$sql = "insert into stats (data, adresip, przegladarka) values ('$data', '$ip', '$browse')";
echo $sql;
$obiekt->insert($sql);
$dane = array();
$dane = $obiekt->select("select * from stats");
echo "<br><br>";
print_r($dane);
echo "<br><br>";
foreach ($dane as $klucz => $dana) {
echo $klucz.'===='.$dana;
}
?>