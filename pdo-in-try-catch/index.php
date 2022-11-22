<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "villes_france";
$path = "mysql:host=$host;dbname=$dbname;charset=utf8";

// Le try...catch permet de renvoyer des erreurs si la connexion vers la base de données ne se fait pas
try
{
    $connexion = new PDO($path, $user, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
// On lève une exception de type PDOException que l'on enferme dans la variable $e
catch (PDOException $e)
{
    // On peut afficher un message d'erreur avec getMessage() mais il y a d'autres fonctionnalités
    // https://www.php.net/manual/fr/exception.getmessage.php
    throw new PDOException($e->getMessage() , (int)$e->getCode());
}

// Maintenant que notre connexion avec la BDD est faite on peut faire nos requêtes

// On construit la requête que l'on veut faire avec du SQL et la méthode query() de PDO
// https://www.php.net/manual/fr/pdo.query.php
$result = $connexion->query("SELECT * FROM departement");
// Enfin, on va chercher les données qui nous seront renvoyés sous forme d'objets/tableaux
// https://www.php.net/manual/fr/pdostatement.fetchall
$departements = $result->fetchAll();

// Voir le résultat :
var_dump($departements);

// Etant donné que l'on récupère plusieurs éléments, on boucle avec un foreach() pour jouer sur chaque éléments à chaque fois
// https://www.php.net/manual/fr/control-structures.foreach.php
foreach ($departements as $departement) {
    echo $departement["departement_nom"], "<br>";
}