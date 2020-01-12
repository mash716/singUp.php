<?php
function getMaxMin(){
    //渡された引数を配列で取得
    $arr = func_get_args();
    //max()関数とmin()関数の結果を配列として返す
    return array(max($arr),min($arr));
}

$result = getMaxMin(1,2,3,4,-5);
print_r($result);
?>