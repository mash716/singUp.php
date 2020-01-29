<?php
// Manager.phpの読み込み
require_once 'Manager.php';

try{
    //データベースに接続してPDO を生成
    $db = connect();
    $sql='UPDATE user_data set 
    userid=:userid , name=:name ,zipcode=:zipcode , address=:address , tel=:tel , 
    mail=:mail where userid=:userid';

    
    $sql_d='DELETE from user_data where userid=:userid_d';
    //プリペアドステートメントを生成
    print(PDO::ATTR_CURSOR);
    $stt = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

    for($i = 1; $i <= $_POST['ct']; $i++){
        //プリペアドステートメントを実行
        $stt->execute(array(':userid' => $_POST['userid'.$i],
            ':name' => $_POST['name'.$i],
            ':zipcode' => $_POST['zipcode'.$i],
            ':address' => $_POST['address'.$i],
            ':tel' => $_POST['tel'.$i],
            ':mail' => $_POST['mail'.$i]));
    }
    $stt_d = $db->prepare($sql_d, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

    $stt_d->execute(array(':userid_d' => $_POST['userid_d']));

}catch(PDOException $e){
    exit("データベース接続出来へんで。:{$e->getMessage()}");
}
header('Location: http://localhost:3000/database2/view/Show_Edit.php');
$db = NULL; //切断
?>