<?php
  
  function naytaNakyma($sivu, $data = array()) {
    
    $data = (object)$data;
    require 'views/pohja.php';
    exit;
  }
  
  function otsake($sivu){
  
  header('Location: '.$sivu);
  
  exit();
  }


