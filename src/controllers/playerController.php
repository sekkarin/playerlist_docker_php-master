<?php

include_once('');
include_once('');

class PlayerController
{
  private $playerModel;
  private $conf;

  function __construct()
  {
    // $this->conf = new Config();
    // $this->playerModel = new PlayerModel($this->conf);
  }
  public function pageRedirect($url)
  {
    header("location:" . $url);
    exit(0);
  }
  public function indexView()
  {
  
  }
  public function insert()
  {
  
  }
  public function update()
  {

  
  }
  public function delete()
  {

  }
  public function mvcHandler()
  {
  
  }

}

?>