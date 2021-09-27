<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


				<?php

	include ('../backend/load_bdd.php');
	$bdd = connection_mysql();
	$query = $bdd ->query("SELECT*FROM drip_drip ");

	while ($res= $query->fetch()) {
		$profession = $res ['profession'];
		$nom = $res ['nom'];
			echo "<br>le jeu $nom coûte $profession euros <br>";
		}						


	?>

</body>
</html>