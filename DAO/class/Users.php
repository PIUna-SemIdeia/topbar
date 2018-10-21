<?php
// Class user
class Users{

  private $nameUser;
  private $emailUser;
  private $passUser;
  private $dtCadastro;

  public function getNameUser(){
    return $this->nameUser;
  }

  public function setNameUser($nameUser){
    $this->nameUser = $nameUser;
  }

  public function getEmailUser(){
   return $this->emailUser;
  }

  public function setEmailUser($emailUser){
    $this->emailUser = $emailUser;
  }

  public function getPassUser(){
    return $this->passUser;
  }

  public function setPassUser(){
    $this->passUser = $passUser;
  }

  public function getDtCadastro(){
    return $this->dtCadastro;
  }

  public function setDtCadastro($dtCadastro){
    $this->dtCadastro = $dtCadastro;
  }


  // Pass data 
  // Insert method
  public function insert(){

  }




}

?>
