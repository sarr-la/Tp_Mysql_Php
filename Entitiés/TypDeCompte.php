<?php

class TypeDeCompte{

//corps de la classe

private $cleRib;
private $Etat;
private $typecompte;
private $datedebut;
private $datefin;
private $numCmpte;
private $Frouverture;
private $Solde;
private $numAgence;
private $Agios;


public function getCleRip(){

return $this->cleRib;
}

public function getEtat(){
    
return $this->Etat;
}

public function getTypecompte(){

    return $this->typecompte;
}

public function getDatedebut(){
    return $this->datedebut;

}

public function getDatefin(){
    return $this->datefin;

}

public function getNumCmpte(){
    return $this->numCmpte;

}

public function getFrouverture(){
    return $this->Frouverture;

}


public function getSolde(){
    return $this->Solde;

}



public function getNumAgence(){
    return $this->numAgence;

}


public function getAgios(){
    return $this->Agios;

}



    public function setCleRip($CleRip){

    return $this->CleRip = $CleRip;
    }

    public function setEtat($Etat){
        
    return $this->Etat =$Etat;
    }
    
    public function setTypecompte($Typecompte){
        
        return $this->typecompte = $Typecompte;
    }
    
    public function setDatedebut($Datedebut){
        return $this->datedebut = $Datedebut;    
    }
    
    public function setDatefin($Datefin){
        return $this->datefin = $Datefin;
    
    }
    
    public function setNumCmpte($NumCmpte){
        return $this->numCmpte = $NumCmpte;
    
    }
    
    public function setFrouverture($Frouverture){
        return $this->Frouverture = $Frouverture;
    
    }
    
    public function setSolde($Solde){
        return $this->Solde = $Solde;
    
    }
    
    
    
    public function setNumAgence( $NumAgence){
        return $this->NumAgence =$NumAgence;
    
    }
    
    
    public function setAgios($Agios){
        return $this->Agios = $Agios;
    
    }

}

?>