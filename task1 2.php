<?php


// استقبال البيانات من الفورم 
if(isset($_POST['grades'])){
$gradesarray=$_POST['grades'];
}else{
    $gradesarray=[];
}

//convert string =>numbers
$gradesarray=explode(',',$gradesarray);
$gradesarray=array_map('intval',$gradesarray);//number






function calculateAverage($grades){
    $sum=0;
    $counter=0;
    for($i=0;$i<count($grades);$i++) {  
        $sum+=$grades[$i];
        $counter++;
    }  
    $result=$sum/$counter;
    return $result;
}


function calculateMax($grades){
    $max=$grades[0];
    for($i=1;$i<count($grades);$i++){
        if($grades[$i]>$max){
            $max=$grades[$i];
        }
    }
    return $max;
}


function calculateMin($grades){
    $min=$grades[0];
    for($i=1;$i<count($grades);$i++){
        if($grades[$i]<$min){
            $min=$grades[$i];
        }
    }
    return $min;
}


function Rate($grades){
    $result = calculateAverage($grades);

    if ($result>=90 && $result<=100){
        return "A";
    } else if ($result>=80 && $result<90){
        return "B";
    } else if ($result>=70 && $result<80){
        return "C-";
    } else if ($result>=60 && $result<70){
        return "D";
    } else{
        return "You Failed";
    }
}

$avarage=calculateAverage($gradesarray);
$max=calculateMax($gradesarray);


echo $avarage;
echo "<br>";
echo $max;


?>
