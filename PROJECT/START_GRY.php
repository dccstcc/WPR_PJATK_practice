<?php
//generuje obrazek o czarnym tle
$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
imagefill($img, 200,200, $czarny);
imagejpeg($img, "czarnepole.jpg");
imagedestroy($img);
?>

<?php
session_start();
$_SESSION['boolpole1']=false;
$_SESSION['boolpole2']=false;
$_SESSION['boolpole3']=false; 
$_SESSION['boolpole4']=false;
$_SESSION['boolpole5']=false;
$_SESSION['boolpole6']=false;
$_SESSION['boolpole7']=false;
$_SESSION['boolpole8']=false;
$_SESSION['boolpole9']=false;

$_SESSION['pole1'] = 'czarnepole.jpg';
$_SESSION['pole2']= 'czarnepole.jpg';
$_SESSION['pole3']= 'czarnepole.jpg';
$_SESSION['pole4']= 'czarnepole.jpg';
$_SESSION['pole5']= 'czarnepole.jpg';
$_SESSION['pole6']= 'czarnepole.jpg';
$_SESSION['pole7']= 'czarnepole.jpg';
$_SESSION['pole8']= 'czarnepole.jpg';
$_SESSION['pole9']= 'czarnepole.jpg';

$_SESSION['aktywacja1'] = 'input type="image" ';
$_SESSION['aktywacja2'] = 'input type="image" ';
$_SESSION['aktywacja3'] = 'input type="image" ';
$_SESSION['aktywacja4'] = 'input type="image" ';
$_SESSION['aktywacja5'] = 'input type="image" ';
$_SESSION['aktywacja6'] = 'input type="image" ';
$_SESSION['aktywacja7'] = 'input type="image" ';
$_SESSION['aktywacja8'] = 'input type="image" ';
$_SESSION['aktywacja9'] = 'input type="image" ';
//tworze formularz startowy
?>
<form action='gra.php' method='GET'>
<table border=0 align=center cellpadding=0 cellspacing=5>
<tr border=10><td width=200 height=200><input type="image"  src=czarnepole.jpg width=200 height=200  name=pole1></td>
<td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height = 200 name=pole2></td>
<td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height = 200 name=pole3></td>
</tr>
<tr border=10><td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height=200 name=pole4></td>
<td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height = 200 name=pole5></td>
<td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height = 200 name=pole6></td>
</tr>
<tr border=10><td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height=200 name=pole7></td>
<td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height = 200 name=pole8></td>
<td width=200 height=200><input type="image" src=czarnepole.jpg width=200 height = 200 name=pole9></td>
</tr>
</table>
</form>


<?php
//generuje obrazek o czarnym tle z bialym krzyzykiem
$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageline($img, 25, 25, 175, 175, $bialy);
imageline($img, 25, 175, 175, 25, $bialy);
imagejpeg($img, "czarnepolekrzyzyk.jpg");
imagedestroy($img);
?>

<?php
//generuje obrazek o czarnym tle z bialym kolkiem
$img = imagecreatetruecolor(200,200);
$czarny = imagecolorallocate($img,180,180,180);
$bialy = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 200,200, $czarny);
imageellipse($img, 100, 100, 150, 150, $bialy);
imagejpeg($img, "czarnepolekolko.jpg");
imagedestroy($img);
?>