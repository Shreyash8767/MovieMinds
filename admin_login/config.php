<?php

define("DB_HOST", getenv("DB_HOST") ?: "localhost");
define("DB_USER", getenv("DB_USER") ?: "root");
define("DB_PASSWORD", getenv("DB_PASSWORD") ?: "");
define("DB_NAME", getenv("DB_NAME") ?: "login_register");
define("DB_PORT", getenv("DB_PORT") ?: "3306");

$mysqli = new mysqli(
    DB_HOST,
    DB_USER,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT
);

if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");

?>