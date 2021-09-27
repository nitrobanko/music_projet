<?php
session_start();

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$db = new PDO('mysql:host=localhost;dbname=internet_money', 'root', '');

	$sql = "SELECT * FROM user WHERE email = '$email' ";
	$result = $db->prepare($sql);
	$result->execute();

	if ($result->rowCount() == 0) {
		echo "Erreur : mail inexistant";
		
	}

	if($result->rowCount() > 0)
	{
		$data = $result->fetchAll();
		if (password_verify($pass, $data[0]["password"])) 
		{
			echo "connexion réussie";
			$_SESSION["email"] = $email;


		header("Location: ../main/page.php");
		}

	}
	

}

?>