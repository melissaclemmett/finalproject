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
            <p>OCTOBER 1, 2016</p>
            <h2>A Certain Ratio – The Graveyard and The Ballroom</h2>
          </header>
          <p>A Certain Ratio's first album is markedly darker from the funk direction they took afterwards.</p>
          <img src="images/the-graveyard-and-the-ballroom-a-certain-ratio-album-cover.jpg" alt="Album cover of The Graveyard and The Ballroom - A Certain Ratio">
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
