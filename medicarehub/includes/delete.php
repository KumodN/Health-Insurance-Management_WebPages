<?php
require 'config.php';

  if(isset($_GET["inquiry_ID"])){
    $inquiry_ID = $_GET["inquiry_ID"];
    $sql = "DELETE FROM inquiry WHERE inquiry_ID = $inquiry_ID";
    $connection->query($sql);
  }
  header("location: /medicarehub/index.php");
  exit;
