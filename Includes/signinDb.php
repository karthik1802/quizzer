<?php

include_once 'dbConnect.php';


class ClassName extends connectDb{

  function fetch($formData)
  {
    $email = mysqli_real_escape_string($conn, $formData['email']);
    $pwd = mysqli_real_escape_string($conn, $formData['password']);
    $sql = "SELECT * FROM userinfo WHERE email='$email'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetch();

  }

  function checkPassword(){
    if($stmt->row_count()){
      $user = $this->fetch($__POST);
      if($user['password']== $pwd){
        session_start();
        $_SESSION['name']=$user['name'];
        header("Location: ../hi.php");
        exit();
      }else{
        header("Location: ../signin.php?signin=Incorrectpassword");
        exit();
      }
    }
    else{
      header("Location: ../signin.php?signin=Incorrectemail");
      exit();
    }
  }


}




 ?>
