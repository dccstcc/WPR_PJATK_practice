<table>

<tr>
<td></td>
<?php
for ($i=1; $i<=10; $i++)
{
	echo "<td>$i</td>";
}
?>
</tr>

<?php
for ($j=1; $j<=10; $j++)
{
	echo "<tr> <td>$j</td>";	
	for ($k=1; $k<=10; $k++) { $mnozenie=$j*$k; echo "<td>$mnozenie</td>"; }; 
	echo "</tr>";
};
?>

</table>

