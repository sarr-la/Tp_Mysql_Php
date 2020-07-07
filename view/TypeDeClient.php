<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>OuvertureCompte</title>
    <link rel="stylesheet" href="OuvertureCompte.css">
 </head>
<body>

    <form method="post" onsubmit=" event.preventDefault();" id="formtypeclient">

<fieldset id="yakhine1">
    <legend id="legendtypeclient">
        information client:
    </legend>
    <div>
        <label for="client" id="laboptclient"> Veuillez choisir type de client!</label><br/><br/>
        <select name="typeclient" id="typeclient" onchange="verifyTypeclient()" >
            <option value="0">Veuillez choisir de type client!</option>
            <option value="moral">moral</option>
            <option value="salarié">salarié</option>
            <option value="nonsalarié">non salarié</option>
        </select>
    </div></br></br>

    <div class="nom" id="champsnom">
       <label>Nom</label>
       <input type="text" name="nom" id="nom">
    </div >
    <div class="prénom" id="champsprénom">
        <label>Prénom</label>
        <input type="text" name="prénom" id="prenom">
     </div>
     <div class="adresse" id="champsadresse">
        <label>Adresse</label>
        <input type="text" name="adresse"id="adresse">
     </div>
     <div class="email" id="champsemail">
        <label>Email</label>
        <input type="email" name="email" id="email">
     </div>
     <div class="telephone" id="champstelephone">
        <label>Téléphone</label>
        <input type="number" name="telephone" id="telephone">
     </div>
   
</fieldset>
<fieldset>
    <legend id="typeclientsup">
        informations suplémentaires:
    </legend>

    <div class="profession" id="chamsprofession">
       <label>profession</label>
       <input type="text" name="profession" id="professioN">
    </div>
    <div class="salaire" id="champssalaire">
        <label>Salaire</label>
        <input type="text" name="salaire" id="salairE">
     </div>
     <div class="raisonsociale" id="raisonsociale">
        <label>Raison Sociale</label>
        <input type="text" name="raisonsociale" id="raisonsocialE">
     </div>
     <div class="entreprise" id="champsentreprise">
        <label>Entreprise</label>
        <input type="entreprise" name="entreprise" id="entreprisE">
     </div>
     <div class="adentreprise" id="adentreprise">
        <label>Adresse Entreprise</label>
        <input type="adresseEntreprise" name="adresseEntreprise" id="adressentreprisE">
     </div>
     <div class="ninea" id="ninea" >
        <label>Ninea</label>
        <input type="ninea" name="ninea" id="nineA">
     </div>
     <div class="datenaiss" id="champsdatenaiss">
        <label>Date de naissance</label>
        <input type="date" name="date" id="datenaisS">
     </div></br></br>
   
     <button type="submit" onclick="verif(),  validatedClient()">Valider</button>
     </form>
</fieldset>


<script src="./Compte_CU.js"></script>
</body>
</html>