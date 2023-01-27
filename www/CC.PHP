<?php

  $db = new PDO ('mysql:host=localhost;dbname=sih','root','');
  session_start();
  $l  = $_GET["VV2"];

  $sql = $db->prepare("UPDATE `declaration` SET `SITUATION`=2 WHERE N='$l'");
  $sql->execute();

  header('location: GERE.php');

?>