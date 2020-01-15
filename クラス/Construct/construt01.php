<?php
require_once("C:\Users\masho\Desktop\色々\work\php\クラス\Construct\\trent_menu.php");
//インスタンス化
$rnddata = new trent_memu;
$rnddata = $rnddata->show();
//hash化する
$rnddata_hash = $rnddata."|||||||1234";

?>
<form method="POST" action="\クラス\Construct\trent_menu.php">
    <input type="hidden" name='rnddata_hash' value="<?=$rnddata_hash ?>">
    <input type="hidden" name='rnddata' value="<?=$rnddata ?>">
    <input type="textarea" name='rnddata' value="<?=$rnddata ?>">
    <input type="textarea" name='rnddata_hash' value="<?=$rnddata_hash ?>">
    <input type="submit" value="送信">

</form>