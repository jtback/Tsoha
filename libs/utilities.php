<?php
  
  function naytaNakyma($sivu, $data = array()) {
    print_r($data);
    $data = (object)$data;
    require 'views/pohja.php';
    exit();
  }
  
  function otsake($sivu){
  
  header('Location: '.$sivu);
  
  exit();
  }


