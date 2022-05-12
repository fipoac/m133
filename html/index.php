<?php
header('Location: /shop.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/cfg/0.php');
// declare vars (maybe temporary)
$_SESSION['site_desc'] = "Home";

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/header.php');
?>
<h1>Startseite</h1>
<i class="las la-grin-beam-sweat"></i>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/footer.php');
?>