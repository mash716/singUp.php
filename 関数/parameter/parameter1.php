<?php
$value = 10;

function func($value){
    $value++;
    return $value;  
}

print func($value);
print '<br>';
print $value;
?>