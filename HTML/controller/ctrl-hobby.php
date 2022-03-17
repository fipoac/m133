<?php
  // Database connection
  require($_SERVER['DOCUMENT_ROOT'] . '/config/cfg-hobby.php');
  
  // Get all hobbies
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM hobby";
    $stmt = $cnct_hobby->prepare($sql);
    $stmt->execute();
    //$rslt = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rslt_hobby = $stmt->fetchAll();
  }

  // Insert new hobby
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $txt_hobby = $_POST['txt_hobby'];
    $sql = "INSERT INTO hobby (name) VALUES (?)";
    $stmt = $cnct_hobby->prepare($sql);
    $stmt->execute(array($txt_hobby));
  }
?>