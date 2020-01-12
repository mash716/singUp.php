<?php
function getWeight($w){
    $w = $w / 100;
    $result = round($w * $w * 22 , 1);
    print '標準体重:'.$result;
}

getWeight(163);
?>