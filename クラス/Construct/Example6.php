<?php
class Example3{
    #プロパティ
    public $num1;
    public $str;
    
    #コンストラクター
    public function __construct($a,$b){
        $this->num1 = $a;
        $this->num2 = $b;
        print "num1={$this->num1}";
        print "<br>";
        print "num2={$this->num2}";
    }
}
?>