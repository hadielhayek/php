<?php 
function countD ($s){
    $count=0;
for($i=0;$i<strlen($s);$i++){
$count+=$s[$i];
}
return $count;
}

echo countD("371");
?>