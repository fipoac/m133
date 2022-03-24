<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/include/_session.php');
  include_once($_SERVER['DOCUMENT_ROOT'] . '/assets/elements/header.php');
?>
      <section class="hobby-db">
        <div>
          <h4>Das ist eine Testseite, bei Nutzung der Datenbankverbindung werden Session Cookies benutzt</h4>
        </div>
        <div class="container">
          <?php
            $_SESSION['prev_page'] = $_SERVER['PHP_SELF'];
            require($_SERVER['DOCUMENT_ROOT'] . '/controller/ctrl-hobby.php');
          ?>
          <form action="/controller/ctrl-hobby.php" method="post">
            <input name="txt_hobby" class="input-form" type="text" placeholder="Hier Hobby eingeben"><br>
            <input class="normal-btn" type="submit" value="Eintrag hinzuf&uuml;gen">
          </form>
          <?php
            foreach ($rslt_hobby as $val_hobby){
              print_r($val_hobby['name']);
              echo "<br>";
            }
          ?>
        </div>
      </section><!--End hobby-db-->
      <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . '/assets/elements/header.php');
      ?>
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