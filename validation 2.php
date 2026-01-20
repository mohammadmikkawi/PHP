<?php
//post[field=>value     ]
function validatePost(array $post ):array{
    $errors=[];
    $valid_Data=[];

if(isset($post['name'])&& isset($post['email']) ){
    $name=trim($post['name']);//value
    $email=trim($post['email']);

if(strlen($name)<3){
    $errors['name'][]="the name must be larger the 3  characters"."<br>";
}
else if($name==""){
    $errors['name'][]="The name cant be null"."<br>";
}
else if($email==""){
    $errors['email'][]="email cant be null"."<br>";
}

else if(!str_contains($email,'@')){
$errors['email'][]="email dont must have '@' character"."<br>";
}
else{
  $valid_Data=[$name,$email];
}
}
    return [$errors,$valid_Data];
}