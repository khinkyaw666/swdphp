<?php
$host = '127.0.0.1';          // Or 'localhost'
$db   = 'learning_platform';          // Database name
$user = 'root';               // Database username
$pass = '';                   // Database password
$charset = 'utf8mb4';         // Character set

// DSN = Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// PDO Options
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Error mode
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch as associative array
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements
];

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "✅ Connected successfully!";
} catch (\PDOException $e) {
    // Connection failed
    echo "Connection failed: " . $e->getMessage();
}
?>