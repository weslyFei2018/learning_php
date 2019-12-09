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
$sql = "CREATE TABLE test1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table test1 created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

/**
 *  insert multi sql
 */
$sql = "INSERT INTO test1 (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO test1 (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO test1 (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->query($sql=== TRUE)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
