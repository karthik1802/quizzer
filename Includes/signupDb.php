<?php

include_once 'dbConnect.php';

class SignUpUpdate extends ConnectDb {

  private $first_name;
  private $last_name;
  private $gender;
  private $age;
  private $country;
  private $username;
  private $password;
  private $intrest_list;

  function setData($formData){
    if(array_key_exist('first_name',$formData)){
      $this->$first_name=$formData['first_name'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('last_name',$formData)){
      $this->$last_name=$formData['last_name'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('gender',$formData)){
      $this->$gender=$formData['gender'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('age',$formData)){
      $this->$age=$formData['age'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('country',$formData)){
      $this->$country=$formData['country'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('username',$formData)){
      $this->$username=$formData['username'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('email',$formData)){
      $this->$email=$formData['email'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    if(array_key_exist('password',$formData)){
      $this->$password=$formData['password'];
    }else {
        header("Location: ../signup.php?signup=empty");
        exit();
    }

  }


  public function checkDuplicate(){
    $sql = "SELECT * FROM user_info WHERE username = '$this->username' OR email = '$this->email'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
   if($stmt->rowCount())==0){
     return false;
   }else{
     return true;
   }
  }

  public function updateInfo(){
     if($this->checkDuplicate == true){
       $sql = "INSERT INTO user_info (`first_name`, `last_name`, `gender`, `age`, `nationality`, `username`, `password`, `email`)
                VALUES (`$this->first_name`, `$this->last_name`, `$this->gender`, $this->age, `$this->country`, `$this->username`, `$this->password`, `$this->email`)"
       $stmt = $this->conn->prepare($sql);
       $stmt->execute();
     }else{
       header("Location: ../signup.php?signup=exist");
       exit();
     }
   }
}
