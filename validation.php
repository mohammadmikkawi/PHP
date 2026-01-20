<?php
//post=['filed'=>" value "    ]
//error =['filed'=> 'value of error']
function validateForm( array $post): array{
$errors=[];
$data=[];

if(isset($post['name'])){

$data_value=$post['name'];
$data_value=trim($data_value);//spaces

if($data_value===""){
$errors['name'][]="the value is empty ";
}

else if (strlen($data_value)<3){
$errors['name'][]="the length is less than 3 charachters";
}
else{
    $data['name']=$data_value;
}
}

return [$errors,$data];
}
?>