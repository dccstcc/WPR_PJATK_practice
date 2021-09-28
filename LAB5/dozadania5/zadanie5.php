<?php
$katalogi = array();
$pliki = array();
$dir = "./";
if (!($fd = opendir($dir)))
exit ("Nie moge otworzyc katalogu $dir!");

while (($file = readdir($fd)) !== false) {
if (is_file($file) == true) array_push ($pliki, $file);
else if (is_dir($file) == true) array_push ($katalogi, $file);
}

echo "wyswitlam pliki z katalogu:&nbsp;$dir";
echo "<pre>";
print_r($pliki);
echo "</pre>";

echo "wyswitlam foldery z katalogu:&nbsp;$dir";
echo "<pre>";
print_r($katalogi);
echo "</pre>";

closedir ($fd);
?>