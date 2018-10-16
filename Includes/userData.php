<?php

include_once 'dbConnect.php';

class User extends connectDb{

  public $username, $first_name, $last_name, $gender
  $age, $country, $email;

  private $user_id;
  function dispInterests(){
    $sql = "SELECT genre_name FROM genre_list
     INNER JOIN preference_list ON genre_list.genre_id = preference_list.genre_id
     INNER JOIN user_info ON preference_list.user_id = $this->user_id";

    $stmt= $this->conn->prepare($sql);
    $stmt->execute();

    if($stmt->row_count != 0){
      return $stmt->fetch();
    }
    else{
      return null;
    }
  }

  function addIntrests($formData){
    if(!empty($formData)){
      foreach ($formData as $pref) {
        $sql_0 = "SELECT genre_id FROM genre_list WHERE genre_name = $pref"
        $stmt_0 = $this->conn->prepare($sql_0);
        $stmt_0->execute();

        $r = $stmt->fetch();

        $sql_1 = "INSERT INTO preference_list ('genre_id', 'user_id')
                  VALUES($r, $this->user_id)";
        $stmt_1 = $this->conn->prepare($stmt_1);
        $stmt_1->execute();

      }


    }

  }




}
