<?php

require_once "./modelOTD/model.php";

class Clients extends dbotd {

  function getSelect(){
    return $this->reqotd("SELECT * FROM `utilisateur`");
  }

 //Fonction Inscription
 function setAdd($tblcli){
	  
  $pseudo = $tblcli['pseudo'];
  $mail = $tblcli['mail'];
  $mdp = sha1($tblcli['mdp']);
  
  $strSQL = 'INSERT INTO utilisateur (pseudo,mail,mdp) 
              VALUES ("'.$pseudo.'", "'.$mail.'","'.$mdp.'");';
  $add = $this->reqotd($strSQL);
  return $add;
} 


    } 
  

?>