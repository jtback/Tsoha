<?php
  $sivu='kirjautumisnakyma.php';
  $sivu1='asukkaan_etusivu.php';
 // require 'views/pohja.php';
  require_once 'libs/foo.php';
  require_once 'libs/utilities.php';
      //Tarkistetaan että vaaditut kentät on täytetty:
 if (empty($_POST["username"])) {
   naytaNakyma($sivu, array(
      'virhe' => "Kirjautuminen epäonnistui! Et antanut käyttäjätunnusta.",
    ));
 }
 //nayta($sivu);
$kayttaja =  $_POST["username"];

 if (empty($_POST["password"])) {
    naytaNakyma($sivu, array(
      'kayttaja' => $kayttaja,
      'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",
    ));
  }
    
 $salasana = $_POST["password"];
 //nayta($sivu);
  /* Tarkistetaan onko parametrina saatu oikeat tunnukset */
  
if ($kayttaja == 'talkkarin' && $salasana == 'yleisavain') {
    /* Jos tunnus on oikea, ohjataan käyttäjä sopivalla HTTP-otsakkeella asukkaan päänäkymään */
    otsake($sivu1);
  }   
else {

     
      /*väärän käyttäjätunnuksen tai salasanan löytäminen  Tässä käytetään omassa kirjastotiedostossa määriteltyjä yleiskäyttöisiä //funktioita.*/ 

     naytaNakyma($sivu, array(
        'kayttaja' => $kayttaja ,
        'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.", request;
));
}
?>
