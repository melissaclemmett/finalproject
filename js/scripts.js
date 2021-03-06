// alert("TEST")
$(document).ready(start);

function start() {
  console.log("Ready"); //Testing function in console

  $("#epic").fadeIn(750, function(){
    $("#garden").fadeIn(750, function(){
      $("#music").fadeIn(750, function(){
        $(".logo").addClass("underlined");

          if ( $(".logo").hasClass("underlined") ) {
            $(".tagline").fadeIn(2000);
          }
      });
    });
  });

  $("#hamburger-trigger").click(function(){
  $("#mobileMenu").toggleClass("active");
  });

  $("#mAlbumsMenu").click(function(event){
    event.preventDefault();
    $("#mAlbumsDropdownContent").toggleClass("active");
    $("#mobileMenu").toggleClass("active");
  });

  $("#coldwaveAlbums, #mColdwaveAlbums").click(function(event){
    event.preventDefault();
    alert("I haven't reviewed any coldwave albums yet, but I know some good ones, so check back very soon...");
  });

  $("#minimalWaveAlbums, #mMinimalWaveAlbums").click(function(event){
    event.preventDefault();
    alert("I haven't reviewed any minimal wave albums yet, but the reviews are coming, so check back very soon...");
  });

  $("#songsMenu, #mSongsMenu").click(function(event){
    event.preventDefault();
    alert("Songs are under construction...please check back very soon...");
  });

  var bandList = [["A Certain Ratio", "a-certain-ratio–the-graveyard-and-the-ballroom.php"], ["And Also The Trees", "and-also-the-trees-and-also-the-trees.php"], ["Asylum Party", "asylum-party-julia.php"], ["Bethany Curve", "bethany-curve–skies-a-crossed-sky.php"], ["Slowdive", "slowdive-catch-the-breeze-live.php"], ["The Soft Moon", "the-soft-moon–zeros.php"]];

  $(bandList).each(function(){
    $("#bandName").append("<li><a href='" + this[1] + "'> "+ this[0] + "</a></li>");
    console.log("testing");
  });

  var oct16BlogRoll = [["Mon, 3rd: ", "Slowdive - Catch the Breeze (live)", "slowdive-catch-the-breeze-live.php"], ["Sun, 2nd: ", "And Also The Trees – And Also The Trees", "and-also-the-trees-and-also-the-trees.php"], ["Sat, 1st: ", "A Certain Ratio – The Graveyard and The Ballroom", "a-certain-ratio–the-graveyard-and-the-ballroom.php"]];
  var oct16Count = oct16BlogRoll.length;

  $("#oct16Count").text(oct16Count);

  $(oct16BlogRoll).each(function(){
    $("#oct16").append("<li>"+ this[0] + "<a href='" + this[2] + "'> "+ this[1] + "</a></li>");
    console.log("oct16 blogroll testing");
  });

  var sep16BlogRoll = [["Sat, 17th: ", "The Soft Moon – Zeros", "the-soft-moon–zeros.php"], ["Sun, 11th: ", "A Certain Ratio – Crippled Child", "a-certain-ratio-crippled-child.php"], ["Sun, 11th: ", "Asylum Party - Julia", "asylum-party-julia.php"], ["Sun, 11th: ", "Bethany Curve – Skies A Crossed Sky", "bethany-curve–skies-a-crossed-sky.php"]];
  var sep16Count = sep16BlogRoll.length;

  $("#sep16Count").text(sep16Count);

  $(sep16BlogRoll).each(function(){
    $("#sep16").append("<li>"+ this[0] + "<a href='" + this[2] + "'> "+ this[1] + "</a></li>");
    console.log("sep16 blogroll testing");
  });

  $(".blogMonth").click(expandBlogroll);
  $(".closeMonth").click(collapseBlogroll);
}

function expandBlogroll(event) {
  event.preventDefault();
  $(this).parent().next("ul").slideDown("slow");
  $(this).parent().siblings(".closeMonth").show();
}

function collapseBlogroll(event) {
  event.preventDefault();
  $(this).hide();
  $(this).prev("ul").slideUp("slow");
}
