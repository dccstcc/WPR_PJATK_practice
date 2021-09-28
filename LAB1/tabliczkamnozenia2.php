<html>

<head>
<link href="CSStabliczkamnozenia.CSS" rel="stylesheet" type="text/css" />
</head>

<body>

<table border="2">

<tr>
<td style="background:#000; color:#fff; border: 2px"></td>
<?php
for ($i=1; $i<=10; $i++)
{
	echo '<td style="background:#000; color:#fff; border: 2px; border-collapse: separate">'.$i.'</td>';
}
?>
</tr>

<?php
for ($j=1; $j<=10; $j++)
{
	echo '<tr> <td style="background:#000; color:#fff; border: 2px">'.$j.'</td>';	
	for ($k=1; $k<=10; $k++) { $mnozenie=$j*$k; echo "<td>$mnozenie</td>"; }; 
	echo "</tr>";
};
?>

</table>

</body>

</html>