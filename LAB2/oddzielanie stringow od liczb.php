<?php

//tworzymy tablice ze stringów i liczb
$tablica = array(1,2,"abc","def",3,4,5,"ghi","jkl","mno");

//wypisujemy tablicê
echo "<pre>";
print_r ($tablica);
echo "</pre>";

//tworzymy puste tablice
$Tnum = array();
$Tstr = array();

//rozdzielamy tablice
foreach ($tablica as $i => $element)
{
if (is_numeric($element)) 
{
   array_push ($Tnum, $element);
} 
else
{
   array_push ($Tstr, $element);
}
}

//wypisujemy tablice
echo "Tablice po rozdzieleniu";

echo "<pre>";
print_r ($Tnum);
echo "</pre>";

echo "<pre>";
print_r ($Tstr);
echo "</pre>";
?>