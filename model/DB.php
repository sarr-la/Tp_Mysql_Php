<?php

function connection(){
    $servername = "localhost";
    $username = "abdoulaye";
    $password = "rootladi";
    $dbname = "gestion_bancaire";

    try {
      return new PDO('mysql:host=localhost;dbname=gestion_bancaire','root','');
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  function excuteRequete($requete){

     $connect = connection();
     return mysql_query($connect,$requete);

  }

?>