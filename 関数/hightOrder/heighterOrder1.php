<?php
//高階関数
function manipulate($data,$func){
    foreach ($data as $key => $value){
        print '<br>';
        $func($key,$value);
    }
}

//下請け処理を行う関数
function disp($index,$value){
    print $index + 1 . '番目:' . $value.'<br>';
}

//配列の定義
$ary = array(10,20,30,40,50);

//高階関数の呼び出し
manipulate($ary,'disp');
?>