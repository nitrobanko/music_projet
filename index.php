<!DOCTYPE html>
<html>
<head>
	
	<?php

	include 'includes/head.php';

	?>
</head>
<body>
	<?php

	include 'includes/navbar.php';

	?>

<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/lmd.jpg"></div>
			<div class="carousel-item"><img src="img/lmde.jpg"></div>
			<div class="carousel-item"><img src="img/dxc.jpg"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- Complete Bootstrap Course -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Listes artistes</h2>
				
				
				<?php

	$db = new PDO('mysql:host=localhost;dbname=internet_money', 'root', '');

	$query = $db ->query("SELECT*FROM drip_drip ");

	while ($res= $query->fetch()) {
		$profession = $res ['profession'];
		$nom = $res ['nom'];
			echo "<br>$nom $profession <br>";
		}						


	?>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3"> NEW GENERATION</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/ddl.png"width=180>
						<h3>Une plateforme faites pour les artistes</h3>
						<p>Ce site permet aux artistes de différentes catégorie de pouvoir se mettre en avant. </p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/mic.webp"width=180>
						<h3>CONNEXION</h3>
						<p>Créez de nouvelles connexion avec vos confrères.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/wxc.webp"width=180>
						<h3>PARTAGE</h3>
						<p>Partagez votre passion.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">L'objectif d'Internet Money</h3>
			
				<p>Dans une époque où la reconnaissance artistique ne se limitepas au simple intérprète. Nous cherchons à mettre en avant toutes profession que ce milieu possède afin de le partager au grand public</p>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/mrly.jpg"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<?php

	include 'includes/footer.php';

	?>

<?php

	include 'includes/scripts.php';

	?>





</body>
</html>