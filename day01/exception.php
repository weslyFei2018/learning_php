<?php
//创建一个有异常处理的函数
function checkNum($number)
{
    if ($number > 1) {
        throw  new Exception("Value must be 1 or below");
    }
    return true;
}

//触发异常
//checkNum(2);

//在 try 块
try {
    checkNum(2);
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}