<?php
function findMax($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr);++$i){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return $max;
}
$nums = [];
for ($i = 0;$i < 100;++$i){
    $nums[$i] = rand(1,101);
}
foreach ($nums as $num){
    echo $num . " ";
}
$maxValue = findMax($num);
echo "<br>";
echo "The maximum value is: ".$maxValue;