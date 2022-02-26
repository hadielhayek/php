<?php

$course_name="react";
$Enrolled_Students=20;
$Course_price=22.99." $ usd";
$available=true;
 
if ($available==true){
    echo "course_name:".$course_name."\n"."Enrolled_Students:".$Enrolled_Students."\n". 
    "course_price:".$Course_price."\n"."available:yes";

}
else{
    echo "course_name:".$course_name."\n"."Enrolled_Students:".$Enrolled_Students."\n". 
    "course_price:".$Course_price."\n"."available:no";

}



?>