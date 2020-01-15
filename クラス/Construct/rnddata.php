<!DOCTYPE html>
<html>
    <head>
        <title>sample</title>
    </head>
<body>
<?php
require_once 'Calculate.php';
$rnddata = new Calculate(1234);
print "税込金額は{$rnddata->rnddata()}円です。";
?>
</body>
</html>