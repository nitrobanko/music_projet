<?php
  session_start();

include ('../backend/load_bdd.php');
  $bdd = connection_mysql();
  if (isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
  {
  	$pseudo = htmlspecialchars($_POST['pseudo']);
  	$message = htmlspecialchars($_POST['message']);
  	$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(?,?)');
  	$req = $bdd->execute(array($pseudo, $message));
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>

</head>
<body>
 <form action="" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>



</body>
</html>