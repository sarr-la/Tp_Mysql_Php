<?php

require_once('DB.php');

function ajoutercomptebloque($datedébut, $datefin, $numCmpte, $cleRip, $Frouverture, $Etat, $Solde, $idTypeCompte){

    $sqlbloque = "INSERT INTO `Compte`( `datedebut`, `datefin`,`cleRib`, `numCmpte`, `Frouverture`, `Etat`,`Solde`, idTypeCompte) VALUES ('$datedébut', '$datefin', '$cleRip', $numCmpte, $Frouverture, '$Etat', $Solde, 3)";

    $pdo = connection();

    return $pdo->exec($sqlbloque);
}



function ajoutercomptecourant($numCmpte, $cleRip, $Agios,$Etat, $Solde, $idTypeCompte ){

    $sqlcourant = "INSERT INTO `Compte` (`numCmpte`, `cleRib`, Agios, `Etat`,`Solde`, idTypeCompte) VALUES ($numCmpte, '$cleRip', $Agios, '$Etat', $Solde, 2)";

    $pdo = connection();

   // var_dump($sqlcourant);

    return  $pdo->exec($sqlcourant);
}



function ajoutercompteepargne($numCmpte, $numAgence, $cleRip, $Frouverture, $Etat, $Solde, $idTypeCompte){

    $sqlepargne = "INSERT INTO Compte (`numCmpte`, numAgence , cleRib, `Frouverture` , Etat,`Solde`, idTypeCompte) 
    VALUES ($numCmpte, $numAgence, '$cleRip', $Frouverture, '$Etat', $Solde, 1)";

    $pdo = connection();
 
  //  var_dump($sqlepargne);

    return $pdo->exec($sqlepargne);
}




?>