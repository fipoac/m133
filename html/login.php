<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Anmelden";
$_SESSION['prev_page'] = $_SERVER['PHP_SELF'];

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
?>
<!-- if logged in go to account.php -->
<h1>Benutzeranmeldung</h1>
<form action='/ctrl/auth.php' method='post'>
    <div class="input-group">
        <input name="username" class="form-control" type="text" placeholder="Benutzername" aria-label="Benutzername"
            required autofocus>
    </div>
    <div class="input-group">
        <input name="password" class="form-control" type="password" placeholder="Passwort" aria-label="Passwort"
            required>
    </div>
    <?php
    switch ($_SESSION['login_error']) {
        case 'pw':
            echo '<div style="color:red;">Falsches Passwort</div>';
            break;
        case 'username': 
            echo '<div style="color:red;">Falscher Benutzername</div>';
            break;
    }
    unset($_SESSION['login_error']);
    ?>
    <div class="input-group">
        <a class="btn btn-secondary" href="/signin.php">Registrieren</a>
        <input name="login" class="btn btn-primary" type="submit" value="Anmelden">
    </div>
</form>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>