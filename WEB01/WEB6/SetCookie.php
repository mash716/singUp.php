<?php
setcookie("user_name", $_POST["user"], time() + (60 * 60 * 24 * 90));

print 'Cookieを保存しました。';
?>