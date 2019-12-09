<?php

/**
 * PDO
 */

$servername = "47.94.151.95";
$username = "root";
$password = "root";
$dbname = "test";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "连接成功" . PHP_EOL;
    // 使用 sql 创建数据表
    $sql = "CREATE TABLE test3 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // 使用 exec() ，没有结果返回
    $result = $conn->exec($sql);
    echo "result= ", $result, PHP_EOL;
    echo "数据表 test3 创建成功" . PHP_EOL;


    /**
     * insert multi sql
     */
    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->exec("INSERT INTO test3 (firstname, lastname, email) 
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO test3 (firstname, lastname, email) 
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO test3 (firstname, lastname, email) 
    VALUES ('Julie', 'Dooley', 'julie@example.com')");

    // 提交事务
    $conn->commit();
    echo "新记录插入成功" . PHP_EOL;
} catch (PDOException $e) {
    echo $e->getMessage();
    $conn->rollBack();
}
$conn = null;
