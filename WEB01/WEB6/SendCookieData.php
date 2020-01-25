<!DOCTYPE html>
<html>
    <?php
        require_once 'Escape.php';
        session_start();
        $val = (isset($_COOKIE["user_name"])) ? $_COOKIE["user_name"]:"";
        echo $_COOKIE["user_name"];
    ?>
    <body>
    <form method="POST" action="SetCookie.php">
    ユーザー名：
    <input type="text" name="user" size="30" value="<?= es($val); ?>" />
    <input type="submit" value="送信" />
    </form>
    </body>
</html>