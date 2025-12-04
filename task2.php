<?php

//Array Of Products
$products=[
["name"=>"T-shirt","price"=>30,"discount"=>"0.02","type"=>"Clothes"],
["name"=>"pizza","price"=>20,"discount"=>"0.01","type"=>"food"],
["name"=>"Jacket","price"=>30,"discount"=>"0.02","type"=>"Clothes"],
["name"=>"T-shirt","price"=>50,"discount"=>"0","type"=>"Clothes"],
["name"=>"labtop","price"=>500,"discount"=>"0.03","type"=>"Device"],
];
 
//function to calculate
function calculateFinalPrice($products){
    $counter_ex=0;
    $counter_ch=0;
    $counter_med=0;

foreach($products as $product){

$price=$product["price"];
$discount=$product["discount"];
$final_price=$price-($price*$discount);
echo "<br>";
echo $final_price."        ";


if($final_price>=100){
    echo "Expensive";
    $counter_ex++;
}
else if($final_price<100 && $final_price>=50){
    echo "Medium : ";
        $counter_med++;

}
else if ($final_price<50){
echo "Cheap : ";
    $counter_ch++;
}
}
echo"<br>";
echo"Expensive:"."   ".$counter_ex;
echo"<br>";
echo "Cheap :" ."   ".$counter_ch ;
echo"<br>";
echo "Medium:"."     ".$counter_med;
}

calculateFinalPrice($products);
?>