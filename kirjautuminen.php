<?php
  $sivu='kirjautumisnakyma.php';
  $sivu1='asukkaan_etusivu.php';
 
  require_once 'libs/utilities.php';
  require_once 'libs/models/kayttaja.php';
  
 if (empty($_POST)) 
naytaNakyma($sivu, array('kayttaja' => '')); //TYhjä String evaluoituu FALSE:ksi

   
      //Tarkistetaan että vaaditut kentät on täytetty:

      //Käyttäjätunnus kirjoitettu  
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


   $userInDB = Kayttaja::etsiKayttajaTunnuksilla($kayttaja, $salasana); //palauttaa Kayttaja- luokan olion, jos salasanat oikein
 /*  echo 'etsiKayttajaTunnuksilla($kayttaja, $salasana) palauttaa';
   var_dump($userInDB);
   $tunnus = $userInDB->nimi();
   echo 'tunnuksen tallentaminen ei haitta jos väärä'.$tunnus ;
   $salaisuus = $userInDB->salasana();
   var_dump($tunnus);*/
   
     if ($userInDB != null) {
      $_SESSION['kirjautunut'] = $userInDB;  
    otsake($sivu1);

           // Jos tunnus on oikea, ohjataan käyttäjä sopivalla HTTP-otsakkeella asukkaan päänäkymään
        
       
      }   
        
    else         //väärän käyttäjätunnuksen tai salasanan löytäminen  Tässä käytetään
          // omassa kirjastotiedostossa määriteltyjä yleiskäyttöisiä  funktioita.*/

    
    naytaNakyma($sivu, array(
            'kayttaja' => $kayttaja ,
            'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.", 'request'
            ));
?>
