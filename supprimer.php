<?php
	$dsn = "mysql:host=localhost;dbname=carnet;charset=UTF8";
	$user = 'root';
	$mdp = '';

	try {
		$bdd = new PDO($dsn, $user, $mdp);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	
	if (isset($_GET['idP'])) {
		$idP = intval($_GET['idP']); 
		try {
			
			$requete = $bdd->prepare("DELETE FROM personne WHERE idP = :idP");
			$requete->execute(array(':idP' => $idP));

			
			header('Location: index.php');
			exit();
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
	} else {
		echo "ID non spécifié";
	}
?>
