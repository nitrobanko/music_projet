<!DOCTYPE html>
<html>
	<head>
		<title>Search artiste</title>
	</head>
	<body>

		<?php

		$categorie = $_POST['categorie'];

			# CONNEXION BDD
			include("../backend/load_bdd.php");
			$bdd = connection_mysql();

			$query_count = $bdd->prepare("SELECT count(nom)
										  FROM drip_drip
										  WHERE categorie=:categorie");

			$query_count->execute(['categorie'=>$categorie]);

			
				$query = $bdd->prepare("SELECT nom, profession 
										FROM jeux_video
				 						WHERE categorie=:categorie ");
				$query->execute(['categorie'=>$categorie]);

				echo "<b>Voici tous les jeux que $categorie a en sa possession :<br><br></b>";

				while ($res = $query->fetch()) {
					$nom = $res['nom'];
					$profession = $res['profession'];
					echo "Le jeu video $nom | $prix € <br>";
				}
			

		?>

	</body>
</html>