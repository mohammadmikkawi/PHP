<?php

use function PHPSTORM_META\override;

function calculateDiscount($price,$discountPercentage){

$finalPrice=$price-($price*$discountPercentage);


return $finalPrice;
}

function printDiscountMessage($result){
if ($result>=100){
echo "Expensive";
}
else if ($result<100 && $result>=50){
    echo "Reasonable";
}
else if($result<50){
    echo "Cheap";
}





}

$result1=calculateDiscount(500,0.10);//final price
printDiscountMessage($result1);
?>