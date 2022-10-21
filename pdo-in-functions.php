<?php

$db = connectDatabase("localhost", "root", "", "villes_france");
var_dump(selectAllDepartements($db));

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

function selectAllDepartements (PDO $databaseConnexion) :array
{
    $result = $databaseConnexion->query("SELECT * FROM departement");
    return $result->fetchAll();
}
