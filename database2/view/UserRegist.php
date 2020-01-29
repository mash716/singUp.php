<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ユーザー登録</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="center">
<h2>ユーザー登録</h2>
<form method="POST" action="../dbc/Register.php">
        <p class="id_1">ユーザーID(20文字以内):</p>
        <p>
            <input type="text" name="userid" size="20" maxlength="20">
        </p>
        <p class="id_1">氏名:</p>
        <p>
            <input type="text" name="name" size="20" maxlength="20">
        </p>
        <p class="id_2">郵便番号(ハイフンを含む):</p>
        <p>
            <input type="text" name="zipcode" size="20" maxlength="20">
        </p>
        <p class="id_1">住所:</p>
        <p>
            <input type="text" name="address" size="20" maxlength="20">
        </p>
        <p class="id_2">電話番号(ハイフンを含む):</p>
        <p>
            <input type="text" name="tel" size="20" maxlength="20">
        </p>
        <p class="id_1">メールアドレス:</p>
        <p>
            <input type="text" name="mail" size="20" maxlength="20">
        </p>

        <p>
            <input type="submit" class="id_3" value="登録" />
        </p>
        <a href="/database2/view/main.php">メイン画面へ</a>
</form>
</body>
</html>