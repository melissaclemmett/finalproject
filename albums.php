<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html>
  <?php include 'phpPartials/head.php'; ?>

  <body>
    <section class="pageContentWrapper">
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
      <?php include 'phpPartials/header.php'; ?>

      <div class="wrapper">
        <div class="albumItem">
          <?php include 'phpPartials/post_punk.php'; ?>
          <?php include 'phpPartials/shoegaze.php'; ?>
        </div>
      </div>
    </section>

    <?php include 'phpPartials/footer.php'; ?>

    <script src="js/scripts.js"></script>
  <body>
</hmtl>
