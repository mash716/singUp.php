<?php
// Manager.phpの読み込み
require_once 'Manager.php';

try{
    //データベースに接続してPDO を生成
    $db = connect();
    $sql='INSERT INTO user_data(userid,name,zipcode,address,tel,mail)
          VALUES(:userid,:name,:zipcode,:address,:tel,:mail)';
    //プリペアドステートメントを生成
    print(PDO::ATTR_CURSOR);
    $stt = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

    //プリペアドステートメントを実行
    $stt->execute(array(':userid' => $_POST['userid'],
        ':name' => $_POST['name'],
        ':zipcode' => $_POST['zipcode'],
        ':address' => $_POST['address'],
        ':tel' => $_POST['tel'],
        ':mail' => $_POST['mail']));
    $db = NULL;//切断
}catch(PDOException $e){
    exit("データベース接続出来へんで。:{$e->getMessage()}");
}

//header('Localhost: http://'.$_SERVER[HTTP_HOST].dirname($_SERVER['PHP_SELF']))
?>