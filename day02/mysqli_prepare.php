<?php
/**
 * 面向对象
 */
$servername = "47.94.151.95";
$username = "root";
$password = "root";
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功".PHP_EOL;
// sql 创建table

$sql = "INSERT INTO test2(firstname, lastname, email)  VALUES(?, ?, ?)";

// 为 mysqli_stmt_prepare() 初始化 statement 对象
$stmt = mysqli_stmt_init($conn);

// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO test1 (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// 设置参数并执行
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close();
