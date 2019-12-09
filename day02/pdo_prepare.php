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
    $stmt = $conn->prepare("INSERT INTO test3 (firstname, lastname, email) 
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // 插入行
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // 插入其他行
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    // 插入其他行
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();


    echo "新记录插入成功" . PHP_EOL;
} catch (PDOException $e) {
    echo $e->getMessage();
    $conn->rollBack();
}
$conn = null;
