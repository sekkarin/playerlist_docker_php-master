<?php
    include_once('./conf/conf.php');
    include_once('./models/PlayerModel.php');

    //! setup
    $conf = new Config();
    $modelPlayer = new PlayerModel($conf);

    //* insert and check
    $modelPlayer->checkAndInserter();
    


?>