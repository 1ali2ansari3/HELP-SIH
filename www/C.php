<?php

  $db = new PDO ('mysql:host=localhost;dbname=sih','root','');
  session_start();
  $l  = $_GET["VV"];

  $sql = $db->prepare("UPDATE `declaration` SET `SITUATION`=1 WHERE N='$l'");
  $sql->execute();

  header('location: probleme.php');

?>