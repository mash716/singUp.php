<?php
$tmp = $_FILES['upload']['tmp_name'];
$fname = mb_convert_encoding($_FILES['upload']['name'], 'SJIS-WIN','UTF-8');
if(!move_uploaded_file($tmp,'C:/sec02/upload/doc/'.$fname)){
    $err_msg = 'アップロード処理に失敗しました';
}

if(isset($err_msg)){
    die('<div style="color:red;">'.$err_msg.'</dir>');
}

echo"アップロード成功しました";
header('Location: http//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/upload.php');
?>