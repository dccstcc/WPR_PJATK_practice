<table cellspacing="0"><tr>
<?php

$x=8;
$y=8;
$xy=$x*$y;

$i=1;
$j=0;

while ($i<$xy)
{
	if ($i%2!=0) {$color='black';}
	else {$color='white';}
	
	if ($j==8) {echo '</tr><tr>'; $j=0;}
	else {echo '<td style="bgcolor: '.$color.';width:50px;height:50px"></td>'; $j++;}
	
	$i++;
}

echo "</table>";
?>