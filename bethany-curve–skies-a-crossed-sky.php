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

    <section class="main container" id="index">
      <main>
        <acticle>
          <header>
            <hr>
            <p>SEPTEMBER 11, 2016</p>
            <h2>Bethany Curve – Skies A Crossed Sky</h2>
          </header>
          <img src="images/skies-a-crossed-sky-bethany-curve-album-cover.jpg" alt="Album cover of Skies A Crossed Sky - Bethany Curve">
          <p>Skies A Crossed Sky is an album released by the shoegaze band Bethany Curve in 1996.  You can listen to the whole album here:</p>
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/8lREiu54Sbg" frameborder="0" allowfullscreen></iframe>
        </article>
      </main>
      <aside id="homeSidebar">
        <img src="images/melissa-clemmett.jpg" alt="Melissa">
        <p>Hi, I’m Melissa.  I’ve created this blog as a self-indulgent platform to chat about my favourite albums and songs from roughly the above genres and timeframes (I may deviate a little).  I spend an unhealthy amount of time listening to and seeking out new (old) music.  Some of the music in this blog is a result of that searching, some of it I can credit to like-minded friends I’ve met along the way, and some of it is more well-known but I’m gonna post it anyway.  Feel free to get in touch with any recommendations…I can always do with more music.</p>
        <p>For more pretty pictures and peddling of my humble opinion, you can follow me on Facebook or Instagram below. Peace. x</p>
        <p>Email: melissa@epicgardenmusic.com</p>
        <ul>
          <li><a href="https://www.instagram.com/colourless_dream/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://www.facebook.com/melissa.clemmett"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <ul>
        <hr>
        <h3>CURRENT LOCATION</h3>
        <hr>
        <figure>
          <img src="images/melbourne-world-map-current-location.png" alt="World map highlighting Melbourne">
          <figcaption>Melbourne, Australia</figcaption>
        </figure>
      </aside>
    </section>

    <?php include 'phpPartials/footer.php'; ?>

    <script src="js/scripts.js"></script>
  </body>
</html>
