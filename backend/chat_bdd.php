<?php
include ('../backend/load_bdd.php');
  $bdd = connection_mysql();
  $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));


header('Location: ../pages/chat.php');
  ?>