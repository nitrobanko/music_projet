<!DOCTYPE html>
<html>

	<body>

		<?php

			function connection_mysql() {
				try {
					$bdd = new PDO('mysql:host=localhost;dbname=internet_money;charset=utf8', 'root', '');
					return $bdd;
				}
				catch (Exeption $e) {
					die('Erreur: ' . $e->getMessage());
				}
			}

		?>

	</body>

</html>

