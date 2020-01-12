<?php
require_once 'Test.php';
$obj = new Test();
$obj->calculate(10,2);
print "プロパティの値は「{$obj->number}」";
?>