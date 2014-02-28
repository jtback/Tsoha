<?php
  $sivu='kirjautumisnakyma.php';
  $sivu1='asukkaan_etusivu.php';
 
  require_once 'libs/utilities.php';
  require_once 'libs/models/kayttaja.php';
  
  //require 'libs/kayttaja.php';
/*

print_r($);
print_r($result);
*/
  
      //Tarkistetaan että vaaditut kentät on täytetty:
      ?>
      <?php

 if (empty($_POST["username"])) {
//exit
   naytaNakyma($sivu, array(
      'virhe' => "Kirjautuminen epäonnistui! Et antanut käyttäjätunnusta.",
    ));
}
$kayttaja =  $_POST["username"];

 if (empty($_POST["password"])) {
//exit
    naytaNakyma($sivu, array(
      'kayttaja' => $kayttaja,
      'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",
    ));
  }
    

 

 

    
 $salasana = $_POST["password"];
 //nayta($sivu);
  // Tarkistetaan onko parametrina saatu oikeat tunnukset 
 echo $kayttaja;
 echo $salasana;
 echo "pöö";
// $kayt = new Kayttaja();
  $included_files = get_included_files();
   
   foreach ($included_files as $filename) {
    echo "$filename\n";
    }
 $userInDB = Kayttaja::etsiKayttajaTunnuksilla($kayttaja, $salasana); 
 var_dump($userInDB);
 $tunnus = $userInDB->username;
 var_dump($tunnus);/*
if ($kayttaja == $userInDB->username && $salasana == $userInDB->password) {
    // Jos tunnus on oikea, ohjataan käyttäjä sopivalla HTTP-otsakkeella asukkaan päänäkymään
    
   otsake($sivu1);
  }   

else {

     
/*väärän käyttäjätunnuksen tai salasanan löytäminen  Tässä käytetään omassa kirjastotiedostossa määriteltyjä yleiskäyttöisiä funktioita./

     naytaNakyma($sivu, array(
        'kayttaja' => $kayttaja ,
        'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.", //request;
));

}

?>
*/
