<?php
  // Side wide config
  require($_SERVER['DOCUMENT_ROOT'] . '/config/main.php');

  // Connection to database
  try {
    $db_host = $_ENV['MYSQL_HOST'];
    $db_dbname = $_ENV['MYSQL_DATABASE'];
    $db_user = $_ENV['MYSQL_USER'];
    $db_pw = $_ENV['MYSQL_PASSWORD'];
    $cnct_hobby = new PDO("mysql:host=$db_host;dbname=$db_dbname", $db_user, $db_pw);
    // set the PDO error mode to exception
    $cnct_hobby->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Write logging here: echo "Connected successfully";
    // Creation of table if not existant
    $sql = "CREATE TABLE IF NOT EXISTS hobby (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) NOT NULL
      )";
    $cnct_hobby->exec($sql);
    // Write loggin here: echo "Table Hobby created successfully";
  } catch(PDOException $e) {
    // Write error log here: echo "Connection failed: " . $e->getMessage();
  }
?>