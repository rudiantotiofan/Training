<?php
class Books{
  var $price;
  var $title;

  function setPrice($par){
    $this->price = $par;
  }
  function getPrice(){
    echo $this->price."<br/>";
  }
  function setTitle($par){
    $this->title = $par;
  }
  function getTitle(){
    echo $this->title."<br />";
  }
}

$physics = new Books;
$math = new Books;
$chemistry = new Books;

$physics->setTitle("Physics for High School");
$chemistry->setTitle("Advandec Chemistry");
$math->setTitle("Algebra");

$physics->setPrice(10);
$chemistry->setPrice(15);
$math->setPrice(7);

$physics->getTitle();
$chemistry->getTitle();
$math->getTitle();

$physics->getPrice();
$chemistry->getPrice();
$math->getPrice();
 ?>
