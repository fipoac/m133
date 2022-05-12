<?php
// Connection to database
try {
    $options = [
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
      ];
    $db_host = $_ENV['MYSQL_HOST'];
    $db_dbname = $_ENV['MYSQL_DATABASE'];
    $db_user = $_ENV['MYSQL_USER'];
    $db_pw = $_ENV['MYSQL_PASSWORD'];
    $cnct_db = new PDO("mysql:host=$db_host;dbname=$db_dbname", $db_user, $db_pw);
    unset($db_host,$db_dbname,$db_user,$db_pw);
  } catch(PDOException $e) {
    // Write error log here: 
    echo "Connection failed: " . $e->getMessage();
  }
?>