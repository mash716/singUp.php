<!DOCTYPE html>
<html>
    <head>
        <title>sample</title>
    </head>
<body>
<?php
require_once 'Calculate.php';
$price = new Calculate(0.10);
print "税込金額は{$price->taxCalculate(1000)}円です。";
?>
</body>
</html>