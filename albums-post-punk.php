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
          <section class="mainAlbums"></section>
        </div>
      </div>
    </section>

    <?php include 'phpPartials/footer.php'; ?>

    <script src="js/scripts.js"></script>
    <script src="js/post_punk.js"></script>
  </body>
</html>
