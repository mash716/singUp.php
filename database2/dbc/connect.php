<?php
$dan = 'mysql:dbname=shop; host=127.0.0.1';
$usr = 'root';
$pass = 'root';

try{
    $db=new PDO($dan,$usr,$pass);
    print '接続に成功しました';
}catch(PDOException $e){
    exit("データベース接続出来へんで。:{$e->getMessage()}");
}
$db=NULL;
?>