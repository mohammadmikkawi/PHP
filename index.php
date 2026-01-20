<?php
require_once 'validation.php';
require_once 'form.php';


$errors=[];//Invalid data
$data=[];//Valid data

if($_SERVER['REQUEST_METHOD']==='POST'){

$result= validateForm($_POST);
$errors=$result[0];
$data=$result[1];


}
else {
    die("Invalide Request");
}
?>