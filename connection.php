<?php

require 'ClassAutoLoad.php';

try {
    $pdo = new PDO(
        "mysql:host={$conf['db_host']};dbname={$conf['db_name']}",
        $conf['db_user'],
        $conf['db_pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to {$conf['db_name']}";
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}