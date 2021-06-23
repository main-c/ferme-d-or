<?php
/*****************************Connexion à la base de données ********************************/
	function connecter()
	{
		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=GestionClient', 'root', '', $pdo_options);
			//echo "Connexion reussi";
			$bdd->query("SET NAMES UTF8");
			return $bdd;
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}

	}

/******************************Insertion d'un client  base de données *********************/
	function inserer_client($nom, $prenom, $login, $motdepasse, $region, $departement, $arrondissement)
	{
		try{
			$bdd = connecter();
			$req = $bdd->prepare('INSERT INTO client (nom, prenom, login, motdepasse, region, departement, arrondissement) VALUES(?,?,?, PASSWORD(motdepasse),?, ?, ?');
			$req->execute(array($matricule, $prenom, $nom, $login, $motdepasse, $region, $departement, $arrondissement));
			return true;
		}
		catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}
	}
?>
