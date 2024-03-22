<?php

class dbcon{


  private $conn = null;


  private $host = 'localhost';

  private $dbname = 'dbcon';

  private $UserName = 'root';

  private $password = '';
  public function connDB(){
  
  try {
    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname"
    ,$this->UserName,$this->password,[
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
      //echo "Lidhja me: {$this->dbname} - {$this->host}: eshte ralizuar me sukses!";
    } catch (PDOException $pdoe) {
      die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
     }
     return $this->conn;
     }
    }
    
     
     $testDB = new dbcon();
     $testDB->connDB();
     ?>

  
