<?php
  $sivu='kirjautumisnakyma.php';
  $sivu1='asukkaan_etusivu.php';
 // require 'views/pohja.php';
 // require_once 'libs/foo.php';
  require_once 'libs/utilities.php';

/*
$db = pg_connect("host=localhost dbname=jtback")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query

$query = 'SELECT * FROM taloyhtiö';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
print_r($db);
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
  
if ($kayttaja == 'talkkarin' && $salasana == 'avain') {
    // Jos tunnus on oikea, ohjataan käyttäjä sopivalla HTTP-otsakkeella asukkaan päänäkymään 
    otsake($sivu1);
  }   

else {

     
/*väärän käyttäjätunnuksen tai salasanan löytäminen  Tässä käytetään omassa kirjastotiedostossa määriteltyjä yleiskäyttöisiä funktioita.*/

     naytaNakyma($sivu, array(
        'kayttaja' => $kayttaja ,
        'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.", //request;
));

}

?>


