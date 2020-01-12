<?php
//高階関数
function manipulate($data,$func){
    foreach ($data as $key => $value){
        $func($key,$value);
    }
}

$ary = array(10,20,30,40,50);

//高階関数の呼び出し
manipulate(
    $ary,
    function($index,$value){
        print $index + 1 . '番目：' . $value . '<br>';
    }
);
?>