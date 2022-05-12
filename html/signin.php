<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Registrieren";
$_SESSION['prev_page'] = $_SERVER['PHP_SELF'];

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
?>
<form action="/ctrl/user.php" method="post" class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Bitte registrieren</h1>
    <div class="input-group">
        <input name="email" class="form-control" type="email" placeholder="Email" aria-label="Email" id="inputEmail" required autofocus>
    </div>
    <div class="input-group">
        <input name="username" class="form-control" type="text" placeholder="Benutzername" aria-label="Benutzername"
            required>
    </div>
    <div class="input-group">
        <input name="password" class="form-control" type="password" placeholder="Passwort" aria-label="Passwort" id="inputPassword" required>
    </div>
    <div class="input-group">
        <input name="register" class="btn btn-primary" type="submit" value="Registrieren">
    </div>
</form>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>