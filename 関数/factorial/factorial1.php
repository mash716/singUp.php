<?php
function getArea($a,$b){
    $result = $a * $b;
    return $result;
}
//可変関数
$func = 'getArea';
$area = $func(10,15);
print $area;
?>