<?php
$value = 'グローバル変数の値です。';

function func(){
    $value = 'ローカル変数の値です。';
    return $value;
}

print $value;
print '<br>';
print func();
?>