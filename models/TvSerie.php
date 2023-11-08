<?php
class TvSerie extends product{

  use Data;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(int $_published_year , int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons,  string $_title, array $_type, array $_actors, Media $_image){
    $this->published_year = $_published_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;

    parent::__construct($_title, $_type, $_actors, $_image );
  }
};


?>
