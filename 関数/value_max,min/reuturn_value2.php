<?php
function average($dummy){
    $result = 0;
    $arr = func_get_args();
    foreach($arr as $m){
        $result += $m;
    }
    //max()関数とmin()関数の結果を配列として返す
return $result / func_num_args();
}

print average(19,23);

?>