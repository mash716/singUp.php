<?php
//処理が終了しても値を保持する方法 変数にstaticを使用する
function addValue(){
    static $val = 0;
    return ++$val;
}

print addValue();
print '<br>';
print addValue();
print '<br>';
print $val; //error notice:undefinded variableがでるのは当たり前
?>