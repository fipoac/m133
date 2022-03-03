<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = $_ENV['MYSQL_DATABASE'];

// Database use name
$user = $_ENV['MYSQL_USER'];

//database user password
$pass = $_ENV['MYSQL_PASSWORD'];

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>
