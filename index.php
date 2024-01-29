<h1>POO Entreprise</h1>

<?php

// require "Entreprise.php";
// require "Entreprise.php";


spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
$stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanFormation);
$tf1 = new Entreprise("TF1", "1970-01-01", "13 rue de la Seine", "75000", "PARIS");
$mickael = new Employe("MURMANN", "Mickael", "mickael@elan-formation.fr", $elanFormation);

// echo $elanFormation->getRaisonSociale();
// var_dump($elanFormation);
// echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getDateCreation()->format("d.m.Y")." et se situe à l'adresse suivante ". $elanFormation->getAdresseComplete();

// echo $elanFormation->getInfos();

// echo $stephane->getInfos();

// $stephane->setEntreprise($tf1);

// echo $stephane->getInfos();

// var_dump($elanFormation);

echo $elanFormation->afficherEmployes();

?>