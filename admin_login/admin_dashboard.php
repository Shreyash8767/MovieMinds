<?php
// Database connection
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
        getenv("DB_HOST"),
        getenv("DB_USER"),
        getenv("DB_PASSWORD"),
        getenv("DB_NAME") ?: "login_register",
        getenv("DB_PORT") ?: "3306",
        null,
        MYSQLI_CLIENT_SSL
    );

} else {

    $conn->real_connect(
        "localhost",
        "root",
        "",
        "login_register",
        "3306"
    );
}

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

// Query to get admin details
$result = $conn->query("SELECT id, full_name, email FROM users WHERE role='admin'");

// Create an array to hold the data
$admins = array();

// Fetch the data
while($row = $result->fetch_assoc()) {
    $admins[] = $row;
}

// Close connection
$conn->close();

// Return the data in JSON format
echo json_encode($admins);
?>