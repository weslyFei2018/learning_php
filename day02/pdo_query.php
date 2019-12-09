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

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM test3");
    $stmt->execute();

    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all = $stmt->fetchAll();
    foreach($all as $k=>$v) {
        echo $k, ' -- ', json_encode($v), PHP_EOL;
    }

} catch (PDOException $e) {
    echo $e->getMessage();
    $conn->rollBack();
}
$conn = null;
