<?php
session_start();

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$nom = $_POST['nom'];
	

	$db = new PDO('mysql:host=localhost;dbname=internet_money', 'root', '');

	$sql = "SELECT * FROM user WHERE email = '$email' ";
	$result = $db->prepare($sql);
	$result->execute();

	if ($result->rowCount() != 0) {
		
		echo "mail utilisés";
		
		header("Location: ../pages/sign_up.php");

	}

	if($result->rowCount() > 0)
	{
		$data = $result->fetchAll();
		
	}
	else
	{
		$pass =password_hash($pass, PASSWORD_DEFAULT);
		$sql ="INSERT INTO user (email, password, nom) VALUES ('$email', '$pass', '$nom')";
		$req = $db->prepare($sql);
		$req->execute();
		echo "Enregistrement effectué";
		$_SESSION["email"] = $email;

		header("Location: ../main/page.php");
	}

}





?>