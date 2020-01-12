<?php
function testScope(){
    //絶対パス
    require_once 'test.php';
    return $scope;
}
print testScope();
print $scope;//notice
?>