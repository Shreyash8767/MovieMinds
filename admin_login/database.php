<?php

$hostName = getenv("DB_HOST") ?: "localhost";
$dbUser = getenv("DB_USER") ?: "root";
$dbPassword = getenv("DB_PASSWORD") ?: "";
$dbName = getenv("DB_NAME") ?: "login_register";
$dbPort = getenv("DB_PORT") ?: "3306";

$conn = mysqli_connect(
    $hostName,
    $dbUser,
    $dbPassword,
    $dbName,
    $dbPort
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

?>