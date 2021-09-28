<table style="width:17%;height:50%"; cellspacing="0">
<?php
for($i=0; $i<9; $i++)
{
	echo "<tr>";
	for ($j=0; $j<9; $j++)
	{
		if ($j%2==0&&$i%2==0) {echo '<td bgcolor="black"></td>';}
		else {echo "<td></td>";}
	}
    echo "</tr>";
}	
?>
</table>