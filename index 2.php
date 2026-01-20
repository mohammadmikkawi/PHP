<?php
require_once "validation.php";
require_once "form.php";
$errors=[];
$data=[];

if ($_SERVER['REQUEST_METHOD']=="POST")
{
//validation
$result=validatePost($_POST);
$errors=$result[0];
$data=$result[1];
//errors=[field->value of error
foreach($errors as $field=>$value){
    foreach($value as $error){
       echo  $field."       ".$error."<br>";
    }
}
foreach ($data as $data_value ){
    echo $data_value."<br>";
}

}
else{
    die("Invalid Request");
}