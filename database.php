<?php

$hostName = getenv("DB_HOST") ?: "localhost";
$dbUser = getenv("DB_USER") ?: "root";
$dbPassword = getenv("DB_PASSWORD") ?: "";
$dbName = getenv("DB_NAME") ?: "login_register";
$dbPort = getenv("DB_PORT") ?: "3306";

$conn = mysqli_init();

if (getenv("DB_HOST")) {

    mysqli_ssl_set(
        $conn,
        null,
        null,
        "/etc/secrets/aiven-ca.pem",
        null,
        null
    );

    mysqli_real_connect(
        $conn,
        $hostName,
        $dbUser,
        $dbPassword,
        $dbName,
        $dbPort,
        null,
        MYSQLI_CLIENT_SSL
    );

} else {

    $conn->real_connect(
        $hostName,
        $dbUser,
        $dbPassword,
        $dbName,
        $dbPort
    );
}

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8mb4");

?>