<?php
//validation tools

$price=0;

//isset 
if (isset($_POST['price'])){
$pricearray=$_POST['price'];
}
else if (!isset($_POST['price'])){
echo "error";
}

//empty 
if(empty($_POST('price'))){

}
//number,string,
is_numeric($price);
is_string($price);

//sanitization tools

$name="   Mohammad  ";
$new_Name=trim ($name);

echo $new_Name($name);


?>