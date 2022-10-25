<?php
$db = connectDatabase("localhost", "root", "", "villes_france");
echo showAllDepartementName($db);

/**
 * Connexion à la base de données
 * @param string $host L'hôte du gestionnaire de la BDD
 * @param string $user ID de l'utilisateur de la BDD
 * @param string $password Password de l'utilisateur de la BDD
 * @param string $dbname Nom de la BDD
 * @return PDO|PDOException
 */
function connectDatabase (string $host, string $user, string $password, string $dbname) :PDO|PDOException
{
    $path = "mysql:host=$host;dbname=$dbname;charset=utf8";

    try
    {
        $connexion = new PDO($path, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    }
    catch (PDOException $e)
    {
        throw new PDOException($e->getMessage() , (int)$e->getCode());
    }
}

/**
 * Renvoie tous les départements bruts dans un tableau
 * @param PDO $databaseConnexion Connexion à la BDD
 * @return array
 */
function selectAllDepartements (PDO $databaseConnexion) :array
{
    $result = $databaseConnexion->query("SELECT * FROM departement");
    return $result->fetchAll();
}

/**
 * Parcourt tous les départements et affiche leurs noms
 * @param PDO $databaseConnexion Connexion à la BDD
 * @return string
 */
function showAllDepartementName (PDO $databaseConnexion) :string
{
    $departements = selectAllDepartements($databaseConnexion);
    $departementResult = "";

    foreach ($departements as $departement)
    {
        $departementResult .= $departement["departement_nom"];
        $departementResult .= "<br>";
    }

    return $departementResult;
}
