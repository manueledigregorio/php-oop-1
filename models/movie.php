<?php
 class movie{
  public $published_year;
  public $running_time;

  public function __construct( int $_published_year, int $_running_year, string $_title, array $_type, array $_actors, Media $_image)
    parent::__construct();
 }



?>