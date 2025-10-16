<?php


function calculateAverage($mark1,$mark2,$mark3)
{

$result=($mark1+$mark2+$mark3)/3;
if($result>=60){
    echo "Passed";
}
else if($result<60){
        echo "Failed";
}
}
calculateAverage(88,77,60);








?>

