<!DOCTYPE html>
<html>
    <head>
        <title>sample</title>
    </head>
<body>
<?php
require_once 'Destructor.php';
$obj = new Destructor(200,1.234);
print "num1={$obj->num1}";
print '<br>';
print "num2={$obj->num2}";
print '<br>';
//結果：num2=1.234
?>
</body>
</html>