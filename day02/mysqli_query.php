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

$sql = "SELECT id, firstname, lastname FROM test1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. PHP_EOL;
    }
} else {
    echo "0 结果";
}

$conn->close();
