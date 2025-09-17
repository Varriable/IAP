<?php

require 'ClassAutoLoad.php';
// require 'conf.php'; // Already included in ClassAutoLoad.php

function table(){
    global $conf;

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
        echo "<table class='table table-striped'><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Created At</th></tr></thead><tbody>";
        foreach ($results as $row){
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['created_at']}</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "No users found.";
    }
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
    echo $error;
}
        

}

$ObjLayout->header($conf);
$ObjLayout->navbar($conf);
$ObjLayout->banner($conf);
// if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; // Removed since $success is not set
table();
$ObjLayout->footer($conf);