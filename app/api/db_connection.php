<?php
// api/db_connection.php

/**
 * Get database connection.
 * Credentials come from environment variables (set by docker-compose locally,
 * and by the launch template / secrets store on AWS) - never hardcoded.
 *
 * @return PDO
 */
function getDatabaseConnection() {
    $host     = getenv('DB_HOST');
    $db_name  = getenv('DB_NAME');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');

    $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_TIMEOUT => 5,
    ];

    return new PDO($dsn, $username, $password, $options);
}
?>
