<?php
// Construction de la connexion à la BDD
// Hôte où est installée la BDD
$host = "localhost";
// Identifiant de l'utilisateur de la BDD (ici c'est notre identifiant PHPMyAdmin)
$user = "root";
// Mot de passe de l'utilisateur de la BDD
$pass = "";
// Nom de la BDD
$dbname = "villes_france";
// On construit le chemin avec les variables précédentes
$path = "mysql:host=$host;dbname=$dbname;charset=utf8";

// On instancie la classe PDO() en lui passant en paramètre les variables
// https://www.php.net/manual/fr/book.pdo.php
// https://www.php.net/manual/fr/class.pdo.php
$connexion = new PDO($path, $user, $pass);

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
