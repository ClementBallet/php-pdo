<?php
// Ne pas tenir compte du code en dessous
ob_start();
require_once "pdo-in-functions.php";
ob_end_clean();
echo "<h1>Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes du fetch/fetchAll que vous voulez essayer.</h1>";
// Ne pas tenir compte du code en dessus

/**
 * Documentation : https://www.php.net/manual/fr/pdostatement.fetch.php#refsect1-pdostatement.fetch-parameters
 */

$request = $db->prepare("SELECT * FROM departement");
$request->execute();

/**
 * Avec PDO::FETCH_ASSOC
 * Retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_assoc = $request->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result_fetch_assoc);

/**
 * Avec PDO::FETCH_BOTH (défaut)
 * Retourne un tableau indexé par les noms de colonnes et aussi par les numéros de colonnes, commençant à l'index 0, comme retournés dans le jeu de résultats
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_both = $request->fetchAll(PDO::FETCH_BOTH);
// var_dump($result_fetch_both);

/**
 * Avec PDO::FETCH_BOUND
 * Retourne true et assigne les valeurs des colonnes de votre jeu de résultats dans les variables PHP à laquelle elles sont liées avec la méthode PDOStatement::bindColumn()
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_bound = $request->fetchAll(PDO::FETCH_BOUND);
// var_dump($result_fetch_bound);

/**
 * Avec PDO::FETCH_CLASS
 * Retourne une nouvelle instance de la classe demandée, liant les colonnes du jeu de résultats aux noms des propriétés de la classe et en appelant le constructeur par la suite, sauf si PDO::FETCH_PROPS_LATE est également donné.
 * Si fetch_style inclut PDO::FETCH_CLASS (c'est-à-dire PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE), alors le nom de la classe est déterminé à partir d'une valeur de la première colonne.
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_class = $request->fetchAll(PDO::FETCH_CLASS);
// var_dump($result_fetch_class);

/**
 * Avec PDO::FETCH_LAZY
 * Combine PDO::FETCH_BOTH et PDO::FETCH_OBJ, créant ainsi les noms des variables de l'objet, comme elles sont accédées
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_lazy = $request->fetch(PDO::FETCH_LAZY);
// var_dump($result_fetch_lazy);

/**
 * Avec PDO::FETCH_NAMED
 * Retourne un tableau de la même forme que PDO::FETCH_ASSOC, excepté que s'il y a plusieurs colonnes avec les mêmes noms, la valeur pointée par cette clé sera un tableau de toutes les valeurs de la ligne qui a ce nom comme colonne
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_named = $request->fetchAll(PDO::FETCH_NAMED);
// var_dump($result_fetch_named);

/**
 * Avec PDO::FETCH_NUM
 * Retourne un tableau indexé par le numéro de la colonne comme elle est retourné dans votre jeu de résultat, commençant à 0
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_num = $request->fetchAll(PDO::FETCH_NUM);
// var_dump($result_fetch_num);

/**
 * Avec PDO::FETCH_OBJ
 * Retourne un objet anonyme avec les noms de propriétés qui correspondent aux noms des colonnes retournés dans le jeu de résultats
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_obj = $request->fetchAll(PDO::FETCH_OBJ);
// var_dump($result_fetch_obj);

/**
 * Avec PDO::FETCH_PROPS_LATE
 * Lorsqu'il est utilisé avec PDO::FETCH_CLASS, le constructeur de la classe est appelé avant que les propriétés ne soient assignées à partir des valeurs de colonne respectives.
 */
// Commenter tous les autres fetch/fetchAll de la page et décommenter les 2 lignes suivantes pour voir le résultat :
// $result_fetch_obj = $request->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE);
// var_dump($result_fetch_obj);
