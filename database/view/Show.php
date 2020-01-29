<?php
require_once 'Escape.php';
require_once '../dbc/Manager.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>登録済みデータ一覧</title>
<link rel="stylesheet" type="text/css" href="../css/style_select.css">
</head>
<h2>ユーザー登録</h2>
<table class="id_1" border="1" align="center">
    <tr>
        <th>ID</th><th>氏名</th><th>郵便番号</th><th>住所</th><th>電話番号</th><th>メールアドレス</th>
    </tr>
<?php
    try{
        //データベースに接続してPDO を生成
        $db = connect();
        //SQL文
        $sst=$db->prepare('SELECT * FROM USER_DATA ORDER BY userid ASC');
        //プリペアドステートメントを実行
        $sst->execute();
        //結果セットからレコードのデータをフェッチする
        while($row = $sst->fetch(PDO::FETCH_ASSOC)){
?>
    <tr>
        <td><?php es($row['userid']);?></td>
        <td><?php es($row['name']);?></td>
        <td><?php es($row['zipcode']);?></td>
        <td><?php es($row['address']);?></td>
        <td><?php es($row['tel']);?></td>
        <td><?php es($row['mail']);?></td>
    </tr>
<?php
        }
        $db =NULL;
    }catch(PDOException $e){
        die("データベース接続出来へんで。:{$e->getMessage()}");
    }
?>
</table>
</body>
</html>