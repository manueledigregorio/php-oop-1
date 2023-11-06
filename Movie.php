<?php
 class Movie{
  public $title;
  public $type;
  public $actors;
  public $minutes;

  public function __construct(string $_title, array $_type, array $_actors, int $_minutes)
  {
    $this->title = $_title;
    $this->type = $_type;
    $this->actors = $_actors;
    $this->minutes = $_minutes;
  }
 

 };

 

?>