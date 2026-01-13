<?php

$grades=[90,50,44,32,70,78,91,95,99,80,85];
//avarage
function calculateAvarage($grades){
 $sum=0;
 $counter=0;
 for($i=0;$i<=count($grades);$i++)
 {  
$sum+=$grades[$i];
$counter++;
}  
$result=$sum/$counter;
return $result;
}



//max
function calculateMax($grades){
$max=$grades[0];
for($i=1;$i<count($grades);$i++){
if($grades[$i]>$max)
    {
    $max=$grades[$i];
}
}
return $max;
}


//min
function calculateMin($grades){
$min=$grades[0];
for($i=1;$i<count($grades);$i++){
if($grades[$i]<$min)
    {
    $min=$grades[$i];
}
}
return $min;
}


function Rate($grades){

$result=calculateAvarage($grades);

if ($result>=90 &&$result<=100){
    echo "A";
}
else if ($result>=80 &&$result<=89){
    echo "B";
}

else if ($result>=70 && $result<=79 ){
echo "C";
}
else if ($result>=60 && $result<=69 ){
echo "D";
}
else{
    echo "You Field";
}
}


calculateMax($grades);
echo "<br>";
calculateMin($grades);
echo "<br>";
Rate($grades);
?>