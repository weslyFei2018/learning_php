<?php

/**
 * 面向过程
 */

$servername = "47.94.151.95";
$username = "root";
$password = "root";
$dbname = "test";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功".PHP_EOL;

//预处理语句
if (mysqli_stmt_prepare($stmt, $sql)) {
    // 绑定参数
    /**
     * i - 整数
     * d - 双精度浮点数
     * s - 字符串
     * b - 布尔值
     */
    mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);

    // 设置参数并执行
    $firstname = 'John';
    $lastname = 'Doe';
    $email = 'john@example.com';
    mysqli_stmt_execute($stmt);

    $firstname = 'Mary';
    $lastname = 'Moe';
    $email = 'mary@example.com';
    mysqli_stmt_execute($stmt);

    $firstname = 'Julie';
    $lastname = 'Dooley';
    $email = 'julie@example.com';
    mysqli_stmt_execute($stmt);
}

mysqli_close($conn);

