<?php
//高階関数
function manipulate($data,$func){
    foreach ($data as $key => $value){
        $func($key,$value);
    }
}

$result = 0;
//下請け処理を行う関数
function add($index,$value){
    global $result;
    $result+=$value;
}

//配列の定義
$ary = array(10,20,30,40,50);

//高階関数の呼び出し
manipulate($ary,'add');
print "要素の合計は「($result)」";
?>