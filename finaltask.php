<?php

$Days=[
["date"=>"15/7","temperature"=>30,"weather"=>"suny"],
["date"=>"17/3","temperature"=>25,"weather"=>"winter"],
["date"=>"13/8","temperature"=>15,"weather"=>"windy"],
];

function AvarageTemperature($Days){
    $sum=0;
    $count=0;
    $temps=[];

foreach($Days as $day){

$temps[]= $day["temperature"];

echo "Temperature   :"."      ".$temp=$day["temperature"]."   ".$day["date"]."             ".$day["weather"]."<br>";//test to access.

if($day["temperature"]>=30){
    echo "(HOT)"."              ";
}
else if($day["temperature"]<=29 && $day["temperature"]>20){
    echo "(WARM)"."              ";
}
else if($day["temperature"]<=19 && $day["temperature"]>10){
    echo "(Cool)"."  
                ";
}

echo "<br>";
$sum+=$day["temperature"];
$count++;
}

echo "<br>";
$avg=$sum/$count;
echo "Avarage:"."  ".$avg;
$maxValue=max($temps);
$minValue=min($temps);
echo "<br>";
echo "Max:"."          ".($maxValue);
echo "<br>";
echo "Min:"."          ".($minValue);
}
 AvarageTemperature($Days);
?>