<?php 
    $sivu2='nasukasES.php'; //tätä kontrolleria vastaavan näkymän tiedosto 
    require_once 'libs/utilities.php';

    echo $sivu1;
    print_r($_POST);

    naytaNakyma($sivu2, array(
    kayttaja => "talonmies", //hoida muuttujalla
    ));
?>
    
