<?php
function countNumber($number,$value){
    $count = 0;
    for ($i = 0;$i < count($number);$i++){
        if ($number[$i] === $value){
            $count++;
        }
    }
    return $count;
}
echo countNumber([0,3,5,0,2,7,9,1,0],0);