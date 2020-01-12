<?php
class Calculate{
    //プロパティ
    public $tax;
    //コンストラクター
    public function __construct($tax){
        $this->tax = $tax;
    }
    //メソッド
    public function taxCalculate($price){
        return $price * (1 + $this -> tax);
    }
}
?>