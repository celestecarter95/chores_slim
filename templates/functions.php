<?php
    require('vendor/autoload.php');
    require_once('DB.php');

    function getUser($id) {
      $db = new DB();
      return $db->getUser($id);
    }
?>
