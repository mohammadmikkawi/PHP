<?php

//1-checking the request
if ($_SERVER['REQUEST_METHOD']!=='POST'){
    die("Request Is Invalid");
}

//2- ERROR ARRAY
$errors=[];

//3-Validation
//A-checking the key
if(isset($_POST['full_name'])){
$name=$_POST['full_name'];
//B-chekcing the spaces
$name=trim($name);

//c-checking the empty value
if($name===""){
 $errors['full_name'][]="the value is empty.";
}

if(strlen($name)<3){
    $errors['full_name'][]="the name must be at least 3 or more charchters.";
}

}


else{
    $errors['full_name'][]="the key not found.";
    }


if(isset($_POST['email']))
    {
        //declare the value
    $email=$_POST['email'];
    //clean the value
$email=trim($email);
//checking for null 
if($email===""){
    $errors['email'][]="the value is empty.";
}
//checking for '@'
else if(!str_contains($email,'@')){
     $errors['email'][]="the email must contain @";
}
}

else{
     $errors['email'][]="the key not found.";   
}




foreach($errors as $field=>$value){
    foreach($value as $error){
        echo $field."    ".$error."<br>";
    }
}










?>