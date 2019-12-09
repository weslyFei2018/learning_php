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
// sql 创建table
$sql = "CREATE TABLE test2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)){
    echo "数据表 test2 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}

/**
 *  insert multi sql
 */
$sql = "INSERT INTO test2 (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO test2 (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO test2 (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

