<?php
function average(){
    //処理結果を格納する変数
    $result = 0;
    //渡された引数を配列として取得
    $arr = func_get_args();
    //配列要素を順にして取得して$resultに加算する
    foreach($arr as $a){
        $result += $a;
    }
    //引数の個数で割った平均値を返す
    return $result / func_num_args();
}

print average(10, 20, 30, 40, 50);

?>