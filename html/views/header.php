<?php
    // Load prereqs
    require($_SERVER['DOCUMENT_ROOT'] . '/cfg/1.php');
?>
<!doctype html>
<html class="no-js" lang="de" dir="ltr">
<!-- Site header -->

<head>
    <title>
        <?php
        echo $_SESSION['site_desc'] . " - IT Shop";
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="blog, business, shop, shopping, it, tech, technology, pc, computer-science">
    <meta name="author" content=<?php echo $_ENV['WEB_AUTHOR']; ?>>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/line-awesome.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="shortcut icon" href="/assets/favicon/shortcut_logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
</head>

<body class="text-center">
    <header>
        <?php 
    if (!empty($_SESSION['recent_login']) && $_SESSION['recent_login'] && !empty($_SESSION['user_id'])) { ?>
        <div class="alert alert-success alert-dismissible fade show">
        <strong>Anmelden erfolgreich</strong> <?php echo ' - Willkommen ' . $_SESSION['name'] . '!';?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php
        unset($_SESSION['recent_login']);
    }
    ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img id="nav-logo" style="height:900%;width:auto;" src="/assets/img/logo.svg" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class=<?php if ($_SERVER['SCRIPT_NAME'] == '/index.php') {echo '"nav-link active" aria-current="page"';} else {echo '"nav-link"';} ?>
                                href='/index.php' title='Startseite'>Startseite</a>
                        </li>
                        <li class='nav-item'>
                            <a class=<?php if ($_SERVER['SCRIPT_NAME'] == '/about.php') {echo '"nav-link active" aria-current="page"';} else {echo '"nav-link"';} ?>
                                href='/about.php' title='&Uuml;ber uns und Impressum'>&Uuml;ber uns</a>
                        </li>
                        <!--
                        <li class='nav-item'>
                            <a class=<?php if (in_array($_SERVER['SCRIPT_NAME'], ['/shop.php', '/shop/cart.php', '/shop/checkout.php', '/product.php'])) {echo '"nav-link active" aria-current="page"';} else {echo '"nav-link"';} ?> href='/shop.php' title='Zum Shop'>Shop</a>
                        </li>
                        -->
                        <li class='nav-item dropdown'>
                            <a class=<?php if (in_array($_SERVER['SCRIPT_NAME'], ['/shop.php', '/shop/cart.php', '/shop/checkout.php', '/product.php'])) {echo '"nav-link dropdown-toggle active" aria-current="page"';} else {echo '"nav-link dropdown-toggle"';} ?>
                                href='/shop.php' title='Zum Shop' id='navbarDropdown' role='button'
                                data-bs-toggle='dropdown' aria-expanded="false">Shop</a>
                            <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                <li><a class='dropdown-item' href='/shop/cart.php' title='Zum Warenkorb'>Warenkorb</a>
                                </li>
                                <li><a class='dropdown-item disabled' href='/shop/checkout.php' title='Zur Kasse'>Kasse</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    -->
                </div>
                <div class="col-md-3 text-end">
                    <!-- go to login.php if not already logged in, otherwise go to account.php -->
                    <form action='/account.php' method="post">
                        <button type="submit" title="Mein Benutzerkonto" class="btn btn-primary"
                            style="padding-top:0;padding-bottom:0">
                            <i style="padding-top:4px;font-size: 30px" class="las la-user"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>