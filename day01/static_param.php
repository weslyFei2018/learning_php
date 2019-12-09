<?php
$x = 5;
$y = 10;

function myTest()
{
    static $x = 0;
    echo $x;
    $x++;
    echo PHP_EOL;    // 换行符
}

myTest();
myTest();
myTest();

$a=5;
$b=3;
function t()
{
    echo $a-$b; // 输出 0
}
t();


