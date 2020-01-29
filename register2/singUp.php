<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['name'])) {
  echo 'ようこそ' .  h($_SESSION['name']) . "さん<br>";
  echo "<a href='logout.php'>ログアウトはこちら。</a>";
  exit;
}

 ?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
 </head>
 <body>
   <h1>Login</h1>
   <form  action="login.php" method="post">
     <label for="userID">userID :</label>
     <input type="userID" name="userID"><br>
     <label for="password">password :</label>
     <input type="password" name="password"><br>
     <button type="submit">Sign In!</button>
   </form>
   <h1>new</h1>
   <form action="register1.php" method="post">
     <label for="name">name :</label>
     <input type="name" name="name"><br>
     <label for="age">age :</label>
     <input type="age" name="age"><br>
     <label for="adress">adress :</label>
     <input type="adress" name="adress"><br>
     <label for="tel">tel :</label>
     <input type="tel" name="tel"><br>
     <label for="email">email :</label>
     <input type="email" name="email"><br>
     <label for="userID">userID :</label>
     <input type="userID" name="userID"><br>
     <label for="password">password :</label>
     <input type="password" name="password"><br>
     <button type="submit">Sign In!</button>     <p>※English ONLY</p>
   </form>
 </body>
</html>