<?php
require_once 'libs/tietokantayhteys.php';
class Kayttaja{

  
  private $id;
  private $username;
  private $password;
  
 public function __construct(){

  }
  public function nimi() {
      return $this->username;
  }
  
  public function salasana()
  {
      return $this->password;  
  }
  
  public function id(){
    return $this->id;
  }
  
  private function setId($var)
  {
    $this->id = $var;
  }
  private function setUsername($var){
    $this->username = $var;
  }
  private function setPassword($var){
    $this->password = $var;
  }
  
   /* Etsitään kannasta käyttäjätunnuksella ja salasanalla käyttäjäriviä */
  public static function etsiKayttajaTunnuksilla($kayttaja, $salasana) {echo " etsiKayttajaTunnuksilla()";
    $sql = "SELECT id, tunnus, salasana from käyttäjä where tunnus = ? AND salasana = ? LIMIT 1";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($kayttaja, $salasana));

    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $kayttaja = new Kayttaja();                   //Jos nämä siirretään konstruktorin sisään,
      $kayttaja->setId($tulos->id);                 //niin miten viitataan $tulos muuttujaan?
      $kayttaja->setUsername($tulos->tunnus);
      $kayttaja->setPassword($tulos->salasana);
      return $kayttaja;
    }
  }
  /* Tähän muita Käyttäjäluokan metodeita */
  
}
