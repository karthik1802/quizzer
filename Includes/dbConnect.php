<?php
class ConnectDb {
  public $conn;
  public $dbServername = "localhost";
  public $dbUsername = "root";
  public $dbPassword = "";
  public $dbName = "quizzer";

  public function connect(){
  try{
        $this->conn = new PDO("mysql:host=$this->dbServername;dbname=$this->dbName", $this->dbUsername, $this->dbPassword);
        $this->conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Sucsessfully";
  }
  catch(PDOException $e){
        echo "Connection Failed";
  }
}
}
