<!DOCTYPE html>
<html>
    <head>
        <title>localhost</title>
    </head>
</html>
<?php
function connect(){
    $dan = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $usr = 'root';
    $pass = 'root';

    try{
        $db = new PDO($dan,$usr,$pass);
        print '接続に成功しました。';
    }catch (PDOException $e){
        exit("データベースに接続できません:{$e->getMessage()}");
    }
    $db = NULL;
}
?>