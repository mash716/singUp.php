<?php
require_once('config.php');
//データベースへ接続、テーブルがない場合は作成
try {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("create table if not exists user_t(
    `name` varchar(128) DEFAULT NULL,
    `age` varchar(10) DEFAULT NULL,
    `adress` varchar(128) DEFAULT NULL,
    `tel` varchar(128) DEFAULT NULL,
    `email` varchar(128) DEFAULT NULL,
    `userid` int(11) NOT NULL AUTO_INCREMENT,
    `password` varchar(100) DEFAULT NULL,
    created timestamp not null default current_timestamp
    )");
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//POSTのValidate。
//POSTのValidate。
if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo '入力された値が不正です。';
  return false;
}
//パスワードの正規表現
if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
  echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。';
  return false;
}
$name = $_POST['name'];
$age = $_POST['age'];
$adress = $_POST['adress'];
$tel = $_POST['tel'];
$userID = $_POST['userID'];

//登録処理
try {
  $stmt = $pdo->prepare("insert into user_t(name,age,adress,tel,email,userID,password) value(?,?,?,?,?,?,?)");
  $stmt->execute([$name,$age,$adress,$tel,$email,$userID,$password]);
  echo '登録完了';
} catch (\Exception $e) {
  echo '登録済みのメールアドレスです。';
}

/*
//DB内のメールアドレスを取得
$stmt = $pdo->prepare("select mail from user_t where mail = ?");
$stmt->execute([$mail]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//DB内のメールアドレスと重複していない場合、登録する。
if (!isset($row['mail'])) {
  $stmt = $pdo->prepare("insert into user_t(mail, password) value(?, ?)");
  $stmt->execute([$mail, $password]);
  echo "登録完了";
} else {
  echo '既に登録されたメールアドレスです。';
  return false;
}*/