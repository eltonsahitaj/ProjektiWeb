<?php
require_once('../db/dbcon.php');
if (!isset($_SESSION)) {
    session_start();
}

Class Modeli extends db{
private $emri;
private $email;
private $aksesi;
private $passwordi;

private $dbConn;
public function __construct( $emri='', $email='' ,$aksesi='', $passwordi='', $dbConn='') {
    
    $this->emri = $emri;
    $this->email = $email;
   
    $this->aksesi=$aksesi;
    $this->passwordi=$passwordi;
   
    $this->dbConn = $this->connDB();
}
//Seters and geters

public function getEmri() {
    return $this->emri;
}

public function setEmri($emri) {
    $this->emri = $emri;
}

public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}

public function getAksesi(){
    return $aksesi;
}
public function setAksesi($aksesi){
    $this->aksesi=$aksesi;
}

public function getPasswordi(){
    return $passwordi;
}
public function setPasswordi($passwordi){
    $this->passwordi=$passwordi;
}

public function fshijPerdoruesin($id) {
    try {
        $sql = "DELETE FROM users WHERE email = :email";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

//Metoda per insertim Dhenave
public function insertoDhenat(){
try{
    $sql = "INSERT INTO `users` (`emri`,`email`,`passwordi`) VALUES(?,?,?)";
    $stm = $this->dbConn->prepare($sql);
    $stm->execute([ $this->emri, $this->email, $this->passwordi]);
    
    $_SESSION['regMeSukses'] = true;
}
    catch(Exception $e){
    return $e->getMessage();
        }
}

    
    public function kontrollo(){
        try {
            $sql = "SELECT * from `users` WHERE `emri` = ?";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->emri]);

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function kontrolloLlogarin(){
        try {
            $sql = 'SELECT * from users WHERE email = ? and passwordi = ?';
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->email, $this->passwordi]);

            return $stm->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function shfaqiUserat(){
        try {
            $sql = "SELECT * FROM `users`";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute();
  
            return $stm->fetchAll();
      
        } catch (Exception $e) {
            return $e->getMessage();
        }
       }
  
//Metoda per shfaqjen e te gjithe te dhenave te studentit
    public function shfaqSipasIDs(){
        try{
            $sql = "SELECT * FROM users where emri=?";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->emri]);
            $dhenat = $stm->fetchAll();
            return $dhenat;
        }
    catch(Exception $e){
        return $e->getMessage();
    }
}
public function shfaqTeGjithePerdoruesit(){
        try {
            $sql = 'SELECT * from users';
            $stm = $this->dbConn->prepare($sql);
            $stm->execute();

            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

public function updateUser($id, $emri, $mbiemri, $aksesi) {
    try {
        $sql = "UPDATE users SET emri = :emri, email = :email, aksesi = :aksesi WHERE email = :email";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':emri', $emri);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':aksesi', $aksesi);
        $stmt->execute();
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
}