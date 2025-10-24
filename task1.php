<?php

//if statemnts
function grades($mark)
{

    if ($mark >= 90 && $mark <= 100) {
        echo "The Grade Is A";
    } elseif ($mark <= 89 && $mark >= 80) {
        echo "The Grade Is B";
    } elseif ($mark <= 79 && $mark >= 70) {
echo"The Grade Is C";
    }
    elseif ($mark <= 69 && $mark >= 60) {
        echo "The Grade Is D";
    }
    elseif ($mark <= 59 && $mark >= 50) {
        echo "The Grade Is E";
    }
    else{
        echo "The Grade Is Not Correct";
    }
}
grades(80);
grades(90);
grades(100);
grades(120);

?>