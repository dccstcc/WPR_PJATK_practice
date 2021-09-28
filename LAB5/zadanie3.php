<?php
$teraz = time();
$nowy_rok = mktime(0, 0, 0, 1, 1, (date("Y")+1));
$ile_czasu = abs(ceil(($nowy_rok-$teraz)/86400));
echo "Do konca roku pozostalo&nbsp";
echo $ile_czasu;
echo "&nbsp;dni";


?>