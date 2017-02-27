<!doctype html>
<html>
  <?php include 'phpPartials/head.php'; ?>

  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php include 'phpPartials/head.php'; ?>

    <section class="mainSongs">
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
      <div class="youtubeClip"></div>
    </section>

    <?php include 'phpPartials/footer.php'; ?>

    <script src="js/scripts.js"></script>
  </body>
</html>
