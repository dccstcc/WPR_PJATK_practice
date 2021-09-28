<?php
include "StatsPDO.php";
$obiekt = new Stats('s12623', 'Dom.Stec', 's12623', 'localhost');
$data = date ("d-m-Y G:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$browse = $_SERVER ["HTTP_USER_AGENT"];
$sql = "insert into stats (data, adresip, przegladarka) values ('$data', '$ip', '$browse')";
echo $sql;
$obiekt->insert($sql);
var_dump($dane1);
$dane = array();
$dane = $obiekt->select("select * from stats");
echo "<br><br>";



?>