<!DOCTYPE html>
<html>
    <head>
        <title>sample</title>
    </head>
<body>
<?php
require_once 'Example1.php';
$obj = new Example1(200,1.234);
print "num1={$obj->num1}";
//結果：num1 = 200
print '<br>';
print "num2={$obj->num2}";
//結果：num2=1.234
?>
</body>
</html>