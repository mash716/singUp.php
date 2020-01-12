<?php
function getMaxMin(){
    //渡された引数を配列で取得
    $arr = func_get_args();
    //max()関数とmin()関数の結果を配列として返す
    return array(max($arr),min($arr));
}

//getMaxMin()関数の戻り値の配列要素を変数に代入
list($maxVal,$minVal) = getMaxMin(1,2,3,4,-5);
print "maxVal = {$maxVal} : minVal = {$minVal}";
print '<br>';
print $maxVal;
print '<br>';
print $minVal;
print '<br>';
print '<br>';
print "$maxVal,$minVal";
?>