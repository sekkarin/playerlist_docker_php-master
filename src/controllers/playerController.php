<?php

include_once('./models/PlayerModel.php');
include_once('./conf/conf.php');

class PlayerController
{
  private $playerModel;
  private $conf;

  function __construct()
  {
    $this->conf = new Config();
    $this->playerModel = new PlayerModel($this->conf);
  }
  public function pageRedirect($url)
  {
    header("location:" . $url);
    exit(0);
  }
  public function indexView()
  {
    $json = $this->playerModel->getAllPlayer();
    $result = json_decode($json);
    // print_r($result);
    include('./views/listView.php');
  }
  public function insert()
  {

  }
  public function update()
  {
    // $this->pageRedirect("./views/updatePlayer.php");
    // include('./views/updatePlayer.php');

  }
  public function delete()
  {

  }
  public function mvcHandler()
  {
    $playerRounter = isset($_GET['playerRout']) ? $_GET['playerRout'] : NULL;

    switch ($playerRounter) {
      case 'add':
        break;
      case 'update':
        $this->update();
        break;
      case 'delete':
        break;
      default:
        $this->indexView();

    }
  }

}

?>