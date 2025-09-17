<?php

require 'ClassAutoLoad.php';

try {
    echo "<h2>Users List</h2>";
    $pdo = new PDO(
        "mysql:host={$conf['db_host']};dbname={$conf['db_name']}",
        $conf['db_user'],
        $conf['db_pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // List all users
    $stmt = $pdo->prepare("SELECT * FROM users;");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        foreach ($results as $row){
            echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . " - " . $row['created_at'] . "<br>";
        }
    } else {
        echo "No users found.";
    }
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
    echo $error;
}
        
