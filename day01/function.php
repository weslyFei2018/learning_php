<?php
ini_set("error_reporting",E_ALL & ~E_NOTICE);
function add1($x, $y)
{
//    $total = $x + $y;
    return $x + $y;
}

echo "1 + 16 = " . add1(1, 16);

function test(...$args) //定义可变参数函数，使用...实现
{
    $num = count($args);//统计参数个数
    echo "函数调用参数个数：" . $num . PHP_EOL;
    echo "函数参数详情：";
    foreach ($args as $arg) {
        echo $arg . "  ";
    } //遍历打印出参数
    echo PHP_EOL;
}

test("a");//一个参数
test("a", "b");//两个参数
test("a", "b", "c");//三个参数


function add($x, $y)
{
    return $x + $y;
}

function sub($x, $y)
{
    return $x = $y;
}

function calc($fun, $x, $y)
{
    return $fun($x, $y);
}

function getAdd()
{
    return add;
}

$res = calc(add, 1, 2);
echo 'Res:: ' . $res;
echo PHP_EOL;

$add = getAdd();
echo 'Res:: ' . $add(3, 9);
