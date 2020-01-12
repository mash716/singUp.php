<?php

function getArea($a = 5,$b){
    return $a * $b;
}

$func = 'getArea';
$area = $func(10,15);
print "面積：{$area}";
?>