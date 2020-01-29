<?php
// Manager.phpの読み込み
require_once 'Manager.php';

try{
    //データベースに接続してPDO を生成
    $db = connect();
    $sql='INSERT INTO user_data(userid,name,zipcode,address,tel,mail)
          VALUES(:userid,:name,:zipcode,:address,:tel,:mail)';
    //プリペアドステートメントを生成
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

header('Localhost: http://database2/view/Show_Edit.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ユーザー登録完了</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="center">
<h2>登録完了</h2>
<a href="/database2/view/Show_Edit.php" size=100>編集画面へ</a>
<a href="/database2/view/UserRegist.php" size=100>戻る</a>
</body>
</html>