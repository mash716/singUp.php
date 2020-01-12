<?php
//関数の中で関数を読み込む事
function factorial($n){
    if($n != 0){
        return $n * factorial($n - 1);
    }
    return 1;
}
print factorial(100);
?>