<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/include/_session.php');
  // declare vars (maybe temporary)
  $_SESSION['site_desc'] = "Hobby DB Test";

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
  include_once($_SERVER['DOCUMENT_ROOT'] . '/assets/elements/footer.php');
?>