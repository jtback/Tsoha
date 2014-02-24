<?php 
    $sivu2='nasukasES.php'; //tätä kontrolleria vastaavan näkymän tiedosto 
    require_once 'libs/utilities.php';
    
    
    //print_r($_POST);

  require 'libs/tietokantayhteys.php';
  $kysely = getTietokantayhteys()->prepare("SELECT * from taloyhtiö");
  $kysely->execute();
  echo $kysely->fetchColumn();//

    naytaNakyma($sivu2, array(
    kayttaja => "talonmies", //hoida muuttujalla
    
    ));


    
?>
    
