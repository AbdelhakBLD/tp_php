<?php

$pdo = new PDO('mysql:host=localhost; dbname=animaux', 'visiteur', 'root');

function add($nom, $type)
{
    global $pdo;
    $add = $pdo->prepare("INSERT INTO animaux.chien(`nom`,`type`) VALUE(?,?)");
    $add->bindParam(1, $nom);
    $add->bindParam(2, $type);
    $add->execute();
}

function select()
{
    global $pdo;
    $select = $pdo->query('SELECT * FROM animaux.chien');
    $select = $select->fetchAll(PDO::FETCH_OBJ);
    return $select;
}

$chien = select();

if (
    isset($_REQUEST['nom']) &&
    !empty($_REQUEST['nom']) &&
    isset($_REQUEST['race']) &&
    !empty($_REQUEST['race'])
) {
    $nom = $_REQUEST['nom'];
    $race = $_REQUEST['race'];
    add($nom, $race);
    $chien = select();
}
