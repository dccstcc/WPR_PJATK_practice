<?php

//formularz ze zmiennymi do blokowania pol ($aktywacja) oraz do rysowania kolka, krzyzyka lub pustego pola ($pole)
echo "
<form action=\"gra.php\" method=\"GET\">
<table border=0 align=center cellpadding=0 cellspacing=5>
<tr border=10><td width=200 height=200><$_SESSION[aktywacja1] src=$_SESSION[pole1] width=200 height=200 name=pole1></td>
<td width=200 height=200><$_SESSION[aktywacja2] src=$_SESSION[pole2] width=200 height = 200 name=pole2></td>
<td width=200 height=200><$_SESSION[aktywacja3] src=$_SESSION[pole3] width=200 height = 200 name=pole3></td>
</tr>
<tr border=10><td width=200 height=200><$_SESSION[aktywacja4] src=$_SESSION[pole4] width=200 height=200 name=pole4></td>
<td width=200 height=200><$_SESSION[aktywacja5] src=$_SESSION[pole5] width=200 height = 200 name=pole5></td>
<td width=200 height=200><$_SESSION[aktywacja6] src=$_SESSION[pole6] width=200 height = 200 name=pole6></td>
</tr>
<tr border=10><td width=200 height=200><$_SESSION[aktywacja7] src=$_SESSION[pole7] width=200 height=200 name=pole7></td>
<td width=200 height=200><$_SESSION[aktywacja8] src=$_SESSION[pole8] width=200 height = 200 name=pole8></td>
<td width=200 height=200><$_SESSION[aktywacja9] src=$_SESSION[pole9] width=200 height = 200 name=pole9></td>
</tr>
</table>
<br />
<table align=center>
<td>
<input type=submit value=\"RESETUJ GRE\" name=\"reset\">
</td>
</table>
</form>
";
?>