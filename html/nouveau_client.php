
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
</head>

<?php
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

?>
<body>
<form method="post" action="biblio.php">
        <fieldset>
            <p>
                <p>
                    <label for="Nom">Nom :</label>
                    <input type="text" name="Nom" id="Nom" placeholder="Ex: Gourain" size="30" maxlength="10" />

                </p>
                <label for="Prénom">Prénom :</label>
                <input type="text" name="Prénom" id="Prénom" placeholder="Ex: Tite" size="30" maxlength="10" />
                <label for="Login">Login :</label>
                <input type="text" name="Login" id="Login" placeholder="Ex: gouraintite" size="30" maxlength="10" />
                <label for="password"> Mot de Passe :</label>
                <input type="password" name="password" id="password">
            </p>
        </fieldset>
        <fieldset>
            <label for="Region"> Quel est votre région d'origine</label><br>
            <select name="Region" id="Region">
                <option value="ENord">Extrême Nord</option>
                <option value="Nord">Nord</option>
                <option value="Adamaoua">Adamaoua</option>
                <option value="Centre">Centre</option>
                <option value="Ouest">Ouest</option>
                <option value="NordOUest">Nord OUest</option>
                <option value="SudOUest">Sud OUest</option>
                <option value="Littoral">Littoral</option>
                <option value="Sud">Sud</option>
                <option value="Est">Est</option>
            </select>
        </fieldset>
        <fieldset>
            <label for="Departement">Departement :</label>
            <input type="text" name="Departement" id="Departement" placeholder="Ex: gouraintite" size="30" maxlength="10" />
            <label for="Arrondissement">Arrondissement :</label>
            <input type="text" name="Arrondissement" id="Arrondissement" placeholder="Ex: gouraintite" size="30" maxlength="10" />
        </fieldset>
    </form>
</body>

</html>
