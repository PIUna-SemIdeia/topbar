<?php

class Database extends PDO{

  public $dbHost = array('development' => 'localhost', 'production' => '');
  public $dbName = array('development' => 'topbar', 'production' => '');
  public $dbUser = array('development' => 'root', 'production' => '');
  public $dbPass = array('development' => '', 'production' => '');
  private $dbconn = null;
  
  // AutoStart connection 
  public function __construct(){
    try{
      echo "[*] Connecting\n";
      $this->dbconn = new PDO("mysql:host={$this->dbHost['development']};dbname={$this->dbName['development']}", "{$this->dbUser['development']}", "{$this->dbPass['development']}");
    }catch(PDOException $e){
       echo "Error: {$e->getMessage()}";
     }
  }
  
  // set param 
  private function setParams($statement, $parameters=array()){
    
    foreach($parameters as $key => $value){
    
      $this->setParam($key, $value);
    
    }
  }
  
  // One param 
  private function setParam($statement, $key, $value){
    $statement->bindParam($key, $value);
  }

  // Execute query 
  public function query($query, $params=array()){
    
    $stmt = $this->dbconn->prepare($query);
    
    $this->setParams($stmt, $params);
  
    $stmt->execute();
   
    return $stmt;
  }

  // Expected array as return
  public function select($rawQuery, $params = array()) : array{
    
    $stmt = $this->query($rawQuery, $params);
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Destroy connection
  public function destroyConnection(){
    $this->dbconn = null;
    
   }
  }
?>
