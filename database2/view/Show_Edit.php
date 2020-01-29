<?php
require_once 'Escape.php';
require_once '../dbc/Manager.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>登録済みデータ一覧</title>
<link rel="stylesheet" type="text/css" href="../css/style_edit.css">
</head>
<body>
    <form method="POST" action="../dbc/Refresh.php">
        <input type="submit" value="最新の情報に更新"　/><br>
        <p>削除の際は下記のユーザー名を書きなさい</p>
        <input type="text" name="userid_d" size="20" maxlength="20" value="" />
    <table class="id_1" border="1" align="center">
    <tr>
        <th>ユーザー名</th><th>氏名</th><th>郵便番号</th><th>住所</th><th>電話番号</th><th>メールアドレス</th>
    </tr>
    <?php
        try{
            //データベースに接続してPDO を生成
            $db = connect();
            //SQL文
            $sst=$db->prepare('SELECT * FROM USER_DATA ORDER BY userid ASC');
            //プリペアドステートメントを実行
            $sst->execute();
            //カウンター変数を初期化
            $ct = 0;
            //結果セットからレコードのデータをフェッチする
            while($row = $sst->fetch(PDO::FETCH_ASSOC)){
            $ct++; //カウンター変数に1を加算
    ?>
        <tr>
            <td>
            <?php print(es($row['userid'])); ?>
                <input type="hidden" name="userid<?php print($ct); ?>" value="<?php print(es($row['userid'])) ?>" />
            </td>
            <td>
                <input type="text" name="name<?php print($ct); ?>" value="<?php print(es($row['name'])) ?>" size="10 /">
            </td>
            <td>
                <input type="text" name="zipcode<?php print($ct); ?>" value="<?php print(es($row['zipcode'])) ?>" size="10 /">
            </td>
            <td>
                <input type="text" name="address<?php print($ct); ?>" value="<?php print(es($row['address'])) ?>" size="10 /">
            </td>
            <td>
                <input type="text" name="tel<?php print($ct); ?>" value="<?php print(es($row['tel'])) ?>" size="10 /">
            </td>
            <td>
                <input type="text" name="mail<?php print($ct); ?>" value="<?php print(es($row['mail'])) ?>" size="10 /">
            </td>
        </tr>
    <?php
            }
            $db =NULL;
        }catch(PDOException $e){
            die("エラーでたで！！ええ加減せえ###。:{$e->getMessage()}");
        }
    ?>
    </table>
    <input type="hidden" name="ct" value="<?php print($ct); ?>" />
    </form>
    <a href="/database2/view/UserRegist.php">戻る</a>
</body>
</html>