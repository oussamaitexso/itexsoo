<?php
class book{
  var $title;
  var $pages;
  var $author;
 }

  function __constrcut($atitle,$apages,$aauthor){
    $this->title = $atitle;
    $this->pages = $apages;
    $this->author = $author;
  }

  $book1 = new book("math",250,"teacher");



  echo $book1->title;





 ?>
