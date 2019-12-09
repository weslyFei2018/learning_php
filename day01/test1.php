<?php
$x = 5;
$y = 10;

function myTest()
{
//    global $x, $y;
//    $y = $x + $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // 输出 15

echo PHP_EOL;
//PHP 并置运算符
$txt1 = "Hello world!";
$txt2 = "What a nice day!";
echo $txt1 . " " . $txt2 . PHP_EOL;
//PHP strlen() 函数
echo strlen('Hello World!') . PHP_EOL;
echo strlen("中文字符") . PHP_EOL;  // 输出 12
echo mb_strlen("中文字符", 'utf-8') . PHP_EOL;  // 输出 4
//PHP strpos() 函数
echo strpos("开始测试ceshi", "测试") . PHP_EOL;
echo mb_strpos('开始测试ceshi', '测试') . PHP_EOL;

$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
var_dump($d);          //这里的 $d 就是 boolean 值 true
$e = &$a;
echo $e, PHP_EOL;
$a = 4;
echo $e, PHP_EOL;      // & 是引用的意思，php 没有指针的概念。

$t = date("H");
echo $t, '--';
if ($t < "24") {
    echo "Have a good day!";
}

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo PHP_EOL;
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x], PHP_EOL;
}
foreach ($cars as $car){
    echo $car, PHP_EOL;
}

$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
echo "Peter is " . $age['Peter'] . " years old.", "\n";

$abc = array(
    null => 'a',
    true => 'b', #1
    false => 'c', #1
    0 => 'd',
    1 => 'e', #1
    '' => 'f'
);
echo count($abc), "\n";