<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>OuvertureCompte</title>
    <link rel="stylesheet" href="OuvertureCompte.css">
 </head>
<body>

    <form method="post" action = "../controller/ControllerformtypeCompte.php" id="formtypecompte">

<fieldset id="yakhine">
    <legend id="legendtypecompte">
        information compte:
    </legend>
    <div>
        <label for="compte" id="laboptcompte"> Veuillez choisir le type de compte !</label><br/><br/>
        <select name="typecompte" id="typecompte" onchange="verifyTypecompte()" >
            <option value="0">Veuillez choisir type de compte</option>
            <option value="epargne">compte Eparge</option>
            <option value="courant">compte Courant</option>
            <option value="bloque">compte Bloqué</option>
        </select>
    </div></br></br>

    <div class="dateouverture" id="dateOuv">
       <label>Date d'ouverture</label>
       <input type="date" name="dateouverture" id="dateouverture">
    </div >
    <div class="datedébut" id="dateDébut">
        <label>Date Début</label>
        <input type="date" name="datedébut" id="datedébut">
     </div >
     <div class="datefin" id="dateFin">
        <label>Date Fin</label>
        <input type="date" name="datefin" id="datefin">
     </div >
    <div class="numCompte" id="numCompte">
        <label>numéro compte</label>
        <input type="number" name="numCmpte" id="numcompte">
     </div>
     <div class="numAgence" id="numAg">
        <label>numéro d'agence</label>
        <input type="number" name="numAgence" id="numag">
     </div>
     <div class="cleRip" id="clerip">
        <label>clé rip</label>
        <input type="number" name="cleRip" id="cleriP">
     </div>
     <div class="Agios" id="agios">
        <label>Agios</label>
        <input type="string" name="Agios" id="agioS">
     </div>
     <div class="fraisouverture" id="fraisouverture">
        <label>Frais d'ouverture</label>
        <input type="string" name="Frouverture" id="FrouverturE">
     </div>
     <div class="etat" id="etat">
        <label>Etat</label>
        <input type="number" name="Etat" id="etaT">
     </div>
     <div class="solde" id="solde">
        <label>Solde</label>
        <input type="number" name="Solde" id="soldE">
     </div><br>

     <button id= "validatecompte" type="submit" onclick="verifytypechamps(), validatedCompte()">Valider</button>
    </form>
</fieldset>
<script src="Compte_CU.js"></script>
</body>
</html>