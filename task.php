<?php



if (!isset($_POST['product_name'])) {
    echo "field missing";
}





$product_name = trim($_POST['product_name']);

if ($product_name === "") {
    echo "user did not enter anything";
}


?>