<?php
function test($num){
    if($num>30){
        return "$num is greater than 30";
    }
    elseif($num>20){
        return "$num is greater than 20";
    }
    elseif($num>10){
        return "$num is greater than 10";
    }
    elseif($num<10){
        return "$num is less than 10";
    }
}
echo test(1);
?>