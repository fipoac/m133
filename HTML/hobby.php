<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Hobby DB Test - IT Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, shop, shopping, it, tech, technology, pc, computer-science">
    <meta name="author" content="Nico Fischer BI19bc">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/elegant.css">
    <link rel="stylesheet" href="assets/css/plyr.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="shortcut icon" href="assets/images/favicon/shortcut_logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
  </head>
  <body>
    <div id="main">
      <header>
        <div class="header-wrapper">
          <div class="container">
            <div class="header-menu">
              <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-4 col-md-2"><a class="logo" href="index.html" title="Zur Startseite"><img id="logo-svg" src="assets/images/logo.svg" alt="Logo"></a></div>
                <div class="col-8 col-md-8">
                  <div class="mobile-menu"><a href="#" id="showMenu"><i class="fas fa-bars"></i></a></div>
                  <nav class="navigation">
                    <ul>
                      <li class="nav-item"><a class="pisen-nav-link" href="blog.html" title="Blog">Blog</a>
                      <li class="nav-item"><a class="pisen-nav-link" href="about_us.html" title="Über uns">&Uuml;ber uns</a><i class="submenu-opener fas fa-plus"></i>
                        <ul class="sub-menu">
                          <li class="sub-menu_item"><a class="sub-menu-link" href="contact.html" title="Kontakt">Kontakt</a></li>                      
                        </ul>
                      </li>
                      <li class="nav-item"><a class="pisen-nav-link" href="shop.html" title="Shop">Shop</a>
                    </ul>
                  </nav>
                </div>
                <div class="col-0 col-xl-2">
                  <div class="menu-function">
                    <div id="search"><a class="search-btn" href="#" title="Seite durchsuchen"><i class="icon_search"></i></a></div>
                      <a href="account.html" id="account" title="Benutzerkonto"><i class="icon_profile"></i></a>
                      <a href="shop_cart.html" id="cart" title="Warenkorb"><i class="icon_bag_alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header><!--End header-->
      <section class="hobby-db">
          <div class="container">
            <?php

// The MySQL service named in the docker-compose.yml.
$host = $_ENV['MYSQL_HOST'];

// database user name
$user = $_ENV['MYSQL_USER'];

// database user password
$pass = $_ENV['MYSQL_PASSWORD'];

// database name
$db = $_ENV['MYSQL_DATABASE'];

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $sql = "CREATE TABLE IF NOT EXISTS hobby (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    hobby VARCHAR(30) NOT NULL
    )";
  $conn->exec($sql);
  echo "Table MyGuests created successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


            ?>

          </div>
      </section><!--End hobby-db-->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h5 class="footer-link--title">Melden Sie sich f&uuml;r unseren Newsletter an </h5>
              <form action="" method="post">
                <div class="email-form">
                  <input class="input-form" type="text" placeholder="Geben Sie Ihre Email ein">
                  <button> <i class="fas fa-paper-plane"></i></button>
                </div>
                <div class="read-policy">
                  <input type="checkbox" id="read">
                  <label for="read">Ich habe die Datenschutzvereinbarung gelesen und akzeptiert</label>
                </div>
              </form>
            </div>
          </div>
          <div class="bg-center">
            <p class="copyright">Schriftwerk ist lizensiert unter</br><a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.de"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png"/></a></p>
            <p class="copyright">Rechte an Bildern und anderen Medien sind durch die jeweiligen Rechtebesitzer definiert oder gemeinfrei</p>
          </div>
        </div>
      </footer><!--End footer-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/jquery-ui.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/plyr.min.js"></script>
      <script src="assets/js/aos.js"></script>
      <script src="assets/js/jquery.scrollUp.min.js"></script>
      <script src="assets/js/masonry.pkgd.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/numscroller-1.0.js"></script>
      <script src="assets/js/jquery.countdown.min.js"></script>
      <script src="assets/js/main.js"></script>
    </div>
  </body>
</html>