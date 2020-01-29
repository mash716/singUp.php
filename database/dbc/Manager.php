<?php
function connect(){
    $dan = 'mysql:dbname=user; host=localhost; charser=utf8';
    $usr = 'root';
    $pass = 'root';
    try{
        $db=new PDO($dan,$usr,$pass);
    }catch(PDOException $e){
        exit("データベース接続出来へんで。:{$e->getMessage()}");
    }
    return $db;
}
?>