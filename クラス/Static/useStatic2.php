<!DOCTYPE html>
<html>
<head>
    <title>sample</title>
</head>
<body>
    <?php
        require_once 'StaticCls2.php';
        print 'プロパティpi = ' . StaticCls2::$pi;
        print '<br>';
        print '円の面積：' . StaticCls2::getCircleArea(100);
    ?>
</body>
</html>