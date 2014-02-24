<?php
class Kayttaja{

  
  private $id;
  private $username;
  private $password;
  
 public function __construct($id, $username, $password){
    $this->id = $id;
    $this->username = $username;      //Tämä pätkä on peräisin
    $this->password = $password;
  }
   /* Etsitään kannasta käyttäjätunnuksella ja salasanalla käyttäjäriviä */
  public static function etsiKayttajaTunnuksilla($kayttaja, $salasana) {echo " pöö";
    $sql = "SELECT id, username, password from users where username = ? AND password = ? LIMIT 1";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($kayttaja, $salasana));

    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $kayttaja = new Kayttaja(); 
      $kayttaja->setId($tulos->id);
      $kayttaja->setUsername($tulos->username);
      $kayttaja->setPassword($tulos->password);

      return $kayttaja;
    }
  }

  /* Tähän muita Käyttäjäluokan metodeita */
}
