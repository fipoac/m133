<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// redirect if not logged in
if (empty($_SESSION['user_id'])) {
    header('Location: /login.php', TRUE, 307);
}
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Account";
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
?>
<h1>Benutzerkonto</h1>
<!-- Logout -> get request to auth.php -->
<form action="/ctrl/auth.php" method="get">
    <div class="input-group">
        <input name="logout" class="btn btn-primary" type="submit" value="Abmelden">
    </div>
</form>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>