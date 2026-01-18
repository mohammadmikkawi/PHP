<?php
$errors=[];

//checking the request
if($_SERVER['REQUEST_METHOD']==='POST'){
echo" the request is valid"."<br>";

//full_name
//check if the key is exist
//name
if(isset($_POST['full_name']))
    {
$name=$_POST['full_name'];//value

$name=trim($name);//spaces

if($name==="")
{//checking empty value
$errors['full_name'][]="the value is empty"."<br>";
}
else if (strlen($name)<3  || strlen($name)>10){
$errors['full_name'][]="the length of charachter is invalid"."<br>" ;
}
}

//email
if ( isset($_POST['email']))
{
$email=$_POST['email'];
$email=trim($email);
if($email===""){
    $errors['email'][]="value is empty";
}
else if(!str_contains($email,'@')){
$errors['email'][]="value is Invalid"."<br>";
}
}

//age
if ( isset($_POST['age']))
{
$age=trim($_POST['age']);

if($age===""){
    $errors['age'][]="value is empty"."<br>" ;
}

elseif(!ctype_digit($age)){
   $errors['age'][] = "Age must be a number";
}

}


if ( isset($_POST['password']))
{
$password=$_POST['password'];
$password=trim($password);
if($password===""){
    $errors['password'][]="value is empty"."<br>";
}

if(strlen($password)<6 || strlen($password)>10){
$errors['password'][]="password is invalid"."<br>";
}
}



if ( !isset($_POST['terms'])){
    $errors['terms'][]="you mustt accept the term";
}
{
}

foreach($errors as $field=>$value){
    foreach ($value as $error) {
  echo $field ."       ".$error;
    }
}
}
else{
    die("Invalid Request");
}


?>