<?php
// Database configuration
define('DB_SERVER', 'localhost');      // Replace with your database server hostname or IP
define('DB_USERNAME', 'admin_user'); // Replace with your database username
define('DB_PASSWORD', 'admin_123.'); // Replace with your database password
define('DB_DATABASE', 'class_record'); // Replace with your database name

// Create a database connection
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Uncomment the line below for debugging purposes
     echo "Connected successfully"; 
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
    // Optionally log the error message
    // error_log($e->getMessage(), 3, '/path/to/your/error.log');
}
?>
