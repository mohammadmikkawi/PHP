<?php
//استقبال
if (isset($_POST['prices'])){
$pricearray=$_POST['prices'];
}
else
    {
    $pricearray=[];
}

//string=>numbers
$pricearray=explode(',',$pricearray);
$pricearray=array_map('floatval',$pricearray);//number with decimal


function calculateAverage($price){
$sum=0;
$counter=0;
for($i=0;$i<count($price);$i++){
$sum+=$price[$i];
$counter++;
}
$avg=$sum/$counter;
return $avg;
}



function calculateMostExPensive($price){

$max=$price[0];
for($i=1;$i<count($price);$i++){
if($price[$i]>$max){
$max=$price[$i];
}
}
return $max;
}

function calculateMostCheapest($price){

$min=$price[0];
for($i=1;$i<count($price);$i++){
if($price[$i]<$min){
$min=$price[$i];
}
}
return $min;
}


function classifyProduct($price){
for($i=0;$i<count($price);$i++){
if($price[$i]>30){
echo "Expensive";
echo "<br>";

}
else if($price[$i]<=30 && $price[$i]>=15){
echo " Medium";
echo "<br>";

}
else if ($price[$i]<15 && $price[$i]>=1) {
echo " Cheap";

}
else{
    echo "Invalid or free price";
}
}
}


$result1=calculateAverage($pricearray);
$result2=calculateMostExPensive($pricearray);
$result3=calculateMostCheapest($pricearray);
$result4=classifyProduct($pricearray);
echo "<br>";
echo $result1;
echo "<br>";
echo $result2;
echo "<br>";
echo $result3;

?>