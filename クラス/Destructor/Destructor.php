<?php
class Destructor {
    public $num1;
    public $num2;
    public function __construct($a,$b){
        $this->num1 = $a;
        $this->num2 = $b;
    }
    public function __destruct(){
        print 'インスタンスが破棄されました';
    }
}
?>