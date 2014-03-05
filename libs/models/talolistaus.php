<?php
    require_once 'libs/tietokantayhteys.php'
    
    
    function haeKaikkiTalot(){
    $yhteys =getTietokantayhteys();
    $kysely = getTietokantayhteys()->prepare("SELECT * from taloyhtiö order by Nimi");
    $kysely->execute();
    return $kysely;
    }
  
