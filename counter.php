<?php
$count=("hitcounter.txt");
$hits=file($count);
$hits[0]++;
$fp=fopen($count,"w");
fputs($fp ,"$hits[0]");
fclose($fp);
echo "you are visitor number";
echo $hits[0];
?>

