<?php
$var1 = 32;
$var2 = 45;
 
// Swap Logic

echo "\nThe variables before swapping are:\n";
echo "var1 =".$var1." and var2=".$var2;

$temp = $var1;
$var1 = $var2;
$var2 = $temp;
 
echo "\nThe variables after swapping are: \n";
echo "Number var1 =".$var1." and var2=".$var2."\n";
?>