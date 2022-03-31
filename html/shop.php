<?php
require($_SERVER['DOCUMENT_ROOT'] . '/cfg/_session.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Home";
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
?>
<h1>TEST</h1>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>