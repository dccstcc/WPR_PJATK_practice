<?php
$str="ABRAKADABRA";
$dl=strlen($str);
echo "<table>";
echo "<tr>";
for($i=0; $i<$dl; $i++)
{
   echo "<td>";
   echo $str[$i];
   echo "</td>";
}
echo "</td>";
echo "</tr>";
?>