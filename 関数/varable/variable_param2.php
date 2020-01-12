<?php
function average(){
    //処理結果を格納する変数
    $result = 0;
    //渡された引数を配列として取得
    $arr = func_get_args();
    //func_num_args()で取得した引数の数だけ処理を繰り返す
    for($i = 0;$i < func_num_args(); $i++){
        $result += func_get_arg($i);
    }
    //引数の個数で割った平均値を返す
    return $result / $i;
}

print average(10, 20, 30, 40, 50);
?>