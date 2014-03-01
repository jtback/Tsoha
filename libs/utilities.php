<?php
session_start();  

function naytaNakyma($sivu, $data = array()) {
    
    $data = (object)$data;
    require 'views/pohja.php';
    exit;
}
  
function otsake($sivu){
  
  header('Location: '.$sivu);
  
  exit();
}
/*
function kirjautunut(){
    $asetettu = false
    if(isset($_SESSION['kirjautunut']) 
    {
    $asetettu = true;
    }
    return $asetettu;
}
*/



