<?php

define("DB_HOST", getenv("DB_HOST") ?: "localhost");
define("DB_USER", getenv("DB_USER") ?: "root");
define("DB_PASSWORD", getenv("DB_PASSWORD") ?: "");
define("DB_NAME", getenv("DB_NAME") ?: "login_register");
define("DB_PORT", getenv("DB_PORT") ?: "3306");

$mysqli = mysqli_init();

if (getenv("DB_HOST")) {
    mysqli_ssl_set(
        $mysqli,
        null,
        null,
        "/etc/secrets/aiven-ca.pem",
        null,
        null
    );

    mysqli_real_connect(
        $mysqli,
        DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_NAME,
        DB_PORT,
        null,
        MYSQLI_CLIENT_SSL
    );
} else {
    $mysqli->real_connect(
        DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_NAME,
        DB_PORT
    );
}

if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");

?>