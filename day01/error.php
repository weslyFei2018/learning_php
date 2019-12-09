<?php
/**
 * die() 处理异常
 */
if (!file_exists("file/welcome.txt")) {
    die("文件不存在！");
} else {
    $file = fopen("file/welcome.txt", "r");
    while (!feof($file)) {
        echo fgets($file);
    }
    fclose($file);
    echo PHP_EOL . "--" . PHP_EOL;
    $file = fopen("file/welcome.txt", "r");
    while (!feof($file)) {
        echo fgetc($file);
    }
    fclose($file);
}

echo PHP_EOL . "-----------" . PHP_EOL;

/**
 * 自定义异常
 * @param $errno
 * @param $errstr
 */
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}

set_error_handler("customError");
echo $test;

echo PHP_EOL . "-----------" . PHP_EOL;
/**
 * 触发错误
 */
$test = 2;
if ($test > 1){
    trigger_error("变量值必须小于等于1");
}

echo PHP_EOL . "-----------" . PHP_EOL;
