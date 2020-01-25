<!DOCTYPE html>
<html>
    <head>
            <title>POST01</title>
    </head>
    <body>
        <?php require_once 'Escape.php'; ?>
        こんにちは<?php print es($_POST['name']); ?>さん！
    </body>
</html>