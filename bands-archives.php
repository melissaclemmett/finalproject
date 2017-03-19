<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

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
    <?php include 'phpPartials/header.php'; ?>

    <section class="main container" id="bandsArchives">
      <main>
        <h2>2016</h2>
        <div>
          <h3>
            <a href="" class="blogMonth">October (<span id="oct16Count"></span>)</a>
          </h3>
          <ul id="oct16">
            <li></li>
          </ul>
          <a href="" class="closeMonth">Close ></a>
        </div>

        <div>
          <h3>
            <a href="" class="blogMonth">September (<span id="sep16Count"></span>)</a>
          </h3>
          <ul id="sep16">
            <li></li>
          </ul>
          <a href="" class="closeMonth">Close ></a>
        </div>

      </main>
      <aside id="aboutSidebar">
        <hr>
        <h1>BANDS</h1>
        <hr>
        <ul id="bandName">
          <li></li>
        </ul>
      </aside>
    </section>

    <?php include 'phpPartials/footer.php'; ?>

    <script src="js/scripts.js"></script>
  </body>
</html>
