<?php
    // Create new user
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
            $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);
            require($_SERVER['DOCUMENT_ROOT'] . '/cfg/1.php');
            $sql = 'INSERT INTO Accounts (Username, Password, Email) VALUES (?, ?, ?)';
            $stmt = $cnct_db->prepare($sql);
            $stmt->execute(array($_POST['username'], $pw, $_POST['email']));
        }
        header('Location: /login.php');
    }
?>