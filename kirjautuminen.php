<?php
  require_once 'lib/utilities.php';
  $sivu='kirjautumisnakyma.php';
      //Tarkistetaan että vaaditut kentät on täytetty:
  if (empty($_POST["username"])) {
    naytaNakymä($sivu, array(
      'virhe' => "Kirjautuminen epäonnistui! Et antanut käyttäjätunnusta.",
    ));
  }
  $kayttaja = 'talkkarin' // $_POST["username"];

  if (empty($_POST["password"])) {
    naytaNakymä($sivu, array(
      'kayttaja' => $kayttaja,
      'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",
    ));
  }
    
 $salasana = 'yleisavain'// $_POST["password"];
  
  /* Tarkistetaan onko parametrina saatu oikeat tunnukset */
  if ($kayttaja == 'talkkarin' && $salasana == 'yleisavain') {
    /* Jos tunnus on oikea, ohjataan käyttäjä sopivalla HTTP-otsakkeella asukkaan päänäkymään */
    header('Location: asukkaan_etusivu.php');
  }   
  else {     
      /*väärän käyttäjätunnuksen tai salasanan löytäminen  Tässä käytetään omassa kirjastotiedostossa määriteltyjä yleiskäyttöisiä funktioita.*/ 
      naytaNakyma($sivu, 
    
