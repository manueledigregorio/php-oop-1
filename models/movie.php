<?php
 class Movie extends product{
  use Data;
  public $running_time;

  public function __construct( int $_published_year, int $_running_year, string $_title, array $_type, array $_actors, Media $_image){

    $this->published_year = $_published_year;
    $this->running_time = $_running_year;

    parent::__construct($_title, $_type, $_actors, $_image );

  }
   
 };



?>