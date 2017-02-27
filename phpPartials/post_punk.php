<?php
$albums = array(
  array(
    "imgsrc" => "images/and-also-the-trees-and-also-the-trees-album-cover.jpg",
    "ahref" => "and-also-the-trees-and-also-the-trees.php",
  ),
  array(
    "imgsrc" => "images/the-graveyard-and-the-ballroom-a-certain-ratio-album-cover.jpg",
    "ahref" => "a-certain-ratio–the-graveyard-and-the-ballroom.php",
  ),
  array(
    "imgsrc" => "images/zeros-the-soft-moon-album-cover.jpeg",
    "ahref" => "the-soft-moon–zeros.php",
  ),
);

foreach ($albums as $item) {
  include 'albumCard.php';
} ?>
