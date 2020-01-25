<?php
require_once 'Escape.php';
session_start();
$val;
if(isset($_SESSION['user_name'])){
    $val = $_SESSION['user_name'];
}else{
    $val = "";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>session</title>
    </head>
    <body>
    <form method="POST" action="destroy.php">
    ユーザー名：
    <input type="text" name="user" size="30" value="<?= es($val); ?>" />
    <input type="submit" value="送信" />
    </form>
    </body>
</html>