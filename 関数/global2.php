<?php
$value = 'グローバル変数の値です。';

function func(){
    global $value;
    print $value;//➀
    print '<br>';
    $value = '関数内に代入した値です。';
    return $value;
}

print func();//➁
print '<br>';
print $value;//➂
?>