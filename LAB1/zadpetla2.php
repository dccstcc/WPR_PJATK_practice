<table>
<tr>
<th></th>
<?php
for($z=1; $z<=10; $z++)
{
echo "<th> $i </th>";
}
?> 
<?php
for($i=1;$i<=10;$i++)
{
<tr>
<?php
for ($i=1; $i<=10; $i++)
{
for ($j=1; $j<=10; $j++)
{
$k=$i*$j;
echo "<th> $k </th>";
}
}
?>
</tr>
}
?>
</table>
