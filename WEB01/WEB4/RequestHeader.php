<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8' />
        <title>sample</title>
    </head>
    <body>
        <table border="1">
            <?php require_once 'Escape.php'; ?>
            <?php
                //配列$_SERVERに対して反復処理
                foreach($_SERVER as $key => $value){
                    //キー名の先頭にHTTP_があるか
                    if(mb_stripos($key,'HTTP_') === 0){
                    ?>
                    <tr>
                        <th><?php es($key);?></th>
                        <td><?php es($value);?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </body>
</html>