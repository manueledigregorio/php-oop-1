<?php
 class product{
  public $title;
  public $type;
  public $actors;
  public $image;

  public function __construct(string $_title, array $_type, array $_actors, Media $_image )
  {
    if (empty($_title) || empty($_type) || empty($_actors) || empty($_image)){

      throw new Exception('Mancano alcuni elementi');
    }else{
      $this->title = $_title;
      $this->type = $_type;
      $this->actors = $_actors;
      $this->image = $_image;
     
    }
    
  }
 

 };

 

?>