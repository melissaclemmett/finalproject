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

    <section class="main container" id="about">
      <main>
        <h1>About</h1>
        <p>Hi, I’m Melissa, an ’80s child living in Melbourne, Australia.  I’ve also lived in London, Wellington and Sydney in my former days, but for now, Melbourne is home. In case it’s not abundantly clear from my blog, Sad Lovers and Giants are gods to me. One day when technology permits, I intend to marry a 1980s version of Ian McCulloch. Other things I enjoy include the colour black, ’80s horror movies and cute cats doing absurd things.</p>
        <p>I have an unhealthy obsession with all things post-punk, coldwave and shoegaze and various related genres, and this blog is an outlet for it. I have a particular weakness for dark post-punk/coldwave songs with an excellent bassline. It may take me a little while to build up content, but I have a day job so lay off, yeah? This is a one-woman show…</p>
        <p>The blog will have an emphasis on pictures as there are so many great album covers and band photos from that period, and…well, pictures are fun, right? This blog is intended to be highly subjective, as in I will be giving my humble opinion on the music and generally only covering music I like. This may vary from what society deems the norm, so don’t get your knickers in a knot if you or the world disagree with me. Maybe I do have terrible taste; go read another blog. Click on the album artwork throughout the site for my opinion on it (except my Jeopardy header image – that will lead you nowhere).</p>
        <p>Thanks for reading, good on you.</p>
        <img src="images/melissa-clemmett.jpg" alt="Melissa">
      </main>
      <aside id="aboutSidebar">
        <hr>
        <h2>CURRENT LOCATION</h2>
        <hr>
        <figure>
          <img src="images/melbourne-world-map-current-location.png" alt="World map highlighting Melbourne">
          <figcaption>Melbourne, Australia</figcaption>
        </figure>
        <figure>
          <img src="images/sad-lovers-and-giants-band-outside.jpg" alt="Sad Lovers and Giants">
          <figcaption>The mighty SLAG</figcaption>
        </figure>
        <figure>
          <img src="images/ian-mcculloch-leaning-on-fence.jpg" alt="Ian McCulloch">
          <figcaption>1980s dreamboat Ian</figcaption>
        </figure>
        <figure>
          <img src="images/cat-pushing-down-owners-hand.gif" alt="Cat pushing away owner's attempts at affection">
          <figcaption>Nihilist cat does not love</figcaption>
        </figure>
      </aside>
    </section>

    <?php include 'phpPartials/footer.php'; ?>

    <script src="js/scripts.js"></script>
  </body>
</html>
