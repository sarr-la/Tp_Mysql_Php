<?php

require_once '../model/DB.php';
require_once '../model/modeltypecompte.php';

extract($_POST);

if ($typecompte == "bloque"){  
   //   echo "bloqué";
    //  $typ = getTypeCompte();
    //  var_dump($typ);
    
    //echo $datedébut." ".$datefin." ".$numCmpte." ".$cleRip." ".$Frouverture." ".$Etat." ".$Solde;
   $ok = ajoutercomptebloque($datedébut, $datefin, $numCmpte, $cleRip, $Frouverture, $Etat, $Solde, 3);
     if($ok == true){
         echo "insertion réussie";
     }else{
         echo "insertion echouée";
     }


     }elseif ($typecompte == "courant"){
    $ok = ajoutercomptecourant($numCmpte, $cleRip, $Agios,$Etat, $Solde, 2);
     if($ok == true){
    echo "insertion Courant réussie";
     }else{
    echo "insertion Courant échouée";
     }

   

     }elseif ($typecompte == "epargne"){
    $ok = ajoutercompteepargne($numCmpte, $numAgence, $cleRip, $Frouverture, $Etat, $Solde, 1);
     if($ok == true){
    echo "insertion epargne réussie";
     }else{
    echo "insertion epargne échouée";
     }
     }
     





//$bloque = ajoutercomptebloque($datedébut, $datefin, $numCmpte, $cleRip, $Frouverture, $Etat, $Solde);
/*$courant = ajoutercomptecourant($numCmpte, $cleRip, $Agios,$Etat, $Solde);
$epargne = ajoutercompteepargne();*/


?>