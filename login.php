<?php

require_once('config.php');
session_start();


//DB内でPOSTされたメールアドレスを検索
try {
  /*DBPassのconfig.phpから引数をもらい変数定義*/
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  /*データをuserIDで探す(select文にて)*/
  $stmt = $pdo->prepare('select * from user_t where userID = ?');
  /**/
  $stmt->execute([$_POST['userID']]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//userIDがDB内に存在しているか確認
if (!isset($row['userID'])) {
  echo 'Incorrect password and userID!!';
  return false;
}
//パスワード確認後sessionにメールアドレスを渡す
if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  echo 'LOGIN成功';
  
  function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
  }
} else {
  echo 'Incorrect password and userID!!';
  return false;
}