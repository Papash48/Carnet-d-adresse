<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Résultat de la recherche</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="carnet.ico" />
</head>
<body>
	<div id="pagerecherche">
	<?php
		// Connexion à la base de données
		$dsn = "mysql:host=localhost;dbname=carnet;charset=UTF8";
		$user = 'root';
		$mdp = '';

		try {
			$bdd = new PDO($dsn, $user, $mdp);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		// Récupération de la recherche
		$resultat = $_POST['rechercher'];
		try {
			$requete = $bdd->prepare("SELECT * FROM personne WHERE nomP LIKE :nom");
			$requete->execute(array(':nom' => $resultat.'%'));
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}

		$nbresultat = $requete->rowCount();

		// Affichage du nombre de résultats
		if ($nbresultat <= 1) {
			echo "<p>Il existe $nbresultat résultat</p>";
		} else {
			echo "<p>Il existe $nbresultat résultats</p>";
		}

		// Affichage des résultats
		if ($nbresultat != 0) {
			echo "<table id='tbr' width='90%'>";
			while ($data = $requete->fetch()) {
				echo "
					<tr>
						<td><strong>Nom : </strong>".$data['nomP']." ".$data['prenomP']."</td>
						<td><a href='supprimer.php?idP=".$data['idP']."'><button class='bt' type='button'>Supprimer</button></a></td>
					</tr>
					<tr><td><strong>Téléphone : </strong>".$data['telP']."</td></tr>
					<tr><td><strong>Email : </strong>".$data['mailP']."</td></tr>
					<tr><td><strong>Adresse : </strong>".$data['rueP']." ".$data['cpP']." ".$data['villeP']."</td></tr>
					<tr><td><hr></td></tr>
				";
			}
			echo "</table>";
		} else {
			echo "<p>Aucun résultat trouvé !</p>";
		}

		
		echo "
		<table id='tbs'>
			<tr>
				<td><a href='index.php'><button class='bt' type='button'>Retour</button></a></td>
			</tr>
		</table>
		";
	?>
	</div>
</body>
</html>
