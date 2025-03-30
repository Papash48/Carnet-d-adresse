<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> Rechercher un contact </title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="carnet.ico" />
</head>
<body>

	<form action="resultat.php" method="POST" id="recherche">
	
	<?php
		$dsn = "mysql:host=localhost;dbname=carnet;charset=UTF8";
		$user = 'root';
		$mdp = '';

		try {
			// Connexion à la base de données
			$bdd = new PDO($dsn, $user, $mdp);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}

		try {

			$requete = $bdd->query("SELECT COUNT(*) AS total_contacts FROM personne");
			$result = $requete->fetch();
			$total_contacts = $result['total_contacts']; 
		} catch (Exception $e) {
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}

		
		echo "<p> Rechercher un contact parmi $total_contacts personne" . ($total_contacts > 1 ? "s" : "") . "</p>";
	?>

		<table id="tba">
			<tr>
				<td> <input type="search" placeholder="Entrez un Nom" name="rechercher" required> </td>
			</tr>
			<tr>
				<td> <input type="submit" value="Rechercher"> </td>
			</tr>
		</table>
	</form>

</body>
</html>
