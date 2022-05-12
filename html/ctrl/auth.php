<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
    // check login creds
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['username'], $_POST['password'])){
            require($_SERVER['DOCUMENT_ROOT'] . '/cfg/1.php');
            if ($stmt = $cnct_db->prepare("SELECT Account_ID, Username, Password FROM Accounts WHERE Username=?")) {
                $stmt->execute([$_POST['username']]);
                // check if username returned exactly one result
                if ($stmt->rowCount() == 1) {
                    $user = $stmt->fetch();
                    // Account exists, now we verify the password.
                    // Note: remember to use password_hash in your registration file to store the hashed passwords.
                    if (password_verify($_POST['password'], $user["Password"])) {
                        // Verification success! User has logged-in!
                        // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                        session_regenerate_id();
                        $_SESSION['name'] = $user["Username"];
                        $_SESSION['user_id'] = $user["Account_ID"];
                        $_SESSION['recent_login'] = TRUE;
                        header('Location: /account.php');
                    } else {
                        // Incorrect password
                        $_SESSION['login_error'] = 'pw';
                        header('Location: /login.php');
                    }
                    unset($user);
                } else {
                    // Incorrect username
                    $_SESSION['login_error'] = 'username';
                    header('Location: /login.php');
                }
                $stmt->close();
            }
        }else {
            exit('Bitte Benutzername und Passwort ausf&uuml;llen!');
        }
    }
    // logout
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        session_destroy();
        // Redirect to the login page:
        header('Location: /index.php');
    }