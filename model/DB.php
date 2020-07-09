<?php

class Db{

private $db;

function __construct(){

  
}

public function openDatabase(){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gestion_bancaire";


  try {
      $this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if($this->db != NULL){
     //   echo "conexion reussit";
      }else{
     //   echo "erreur connexion";
      }
  
  } catch (PDOException $e) {
      //throw $th;
      echo $e->getMessage();
  }
  return $this->db;
}  

}
/*}

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

  function excuteRequete($requete){

     $connect = connection();
     return mysql_query($connect,$requete);
*/
  

?>