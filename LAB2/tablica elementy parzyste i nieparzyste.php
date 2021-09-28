<?php

for ($i=0; $i<20; $i++)
{
   $losowa = rand (0,100);
   $tablica[$i] = $losowa;
}

echo "<pre>";
print_r ($tablica);
echo "</pre>";

$parzyste = 0;
$nieparzyste = 0;

foreach ($tablica as $i => $losowa)
{
   if ($losowa%2==0)
   {
     $parzyste++;
   }
   else
   {
      $nieparzyste++;
   }
}
 echo "liczba elementów parzystych to: ", $parzyste, ",<br />liczba elementów nieparzystych to: ", $nieparzyste; 


?>