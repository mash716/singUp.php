<?php

class trent_memu{
    private $test;
    //コンストラクター
    function __construct(){
        $rnddata = bin2hex(random_bytes(16));
        $_SESSION['rnddata'] = $rnddata;
        $this->rnddata = $_SESSION['rnddata'];
    }
    //メソッド
    function show(){
        return $this->rnddata;
    }
}
    if(!empty($_POST["rnddata_hash"])&&!empty($_POST["rnddata"])){
        $rnddata_hash = $_POST["rnddata_hash"];
        $rnddata = $_POST["rnddata"];
        echo $rnddata_hash."<br>";
        echo $rnddata."<br>";
        if(isset($rnddata_hash)){
            if(isset($rnddata)){
                echo"成功！！";
                $rnddata_hash;
                $cut = 11;
                $replace = substr($rnddata_hash,0,strlen($rnddata_hash)-$cut);
                echo$replace."<br>";
                if($rnddata === $replace){
                    echo"大成功！！";
                }else{
                    echo"惜しい";
                }
            }
        }else{
            echo"失敗!!";
        }

    }
?>