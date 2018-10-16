<?php

include_once 'userDetails';

/**
 *
 */
class GetQuiz extends User{

  public $quiz_id, $score;
  function __construct(){
    $this->score = 0;
    $sql = "SELECT * FROM quiz_info ORDER BY quiz_id DESC";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $a = $stmt->fetch();
    $this->quiz_id = $a['quiz_id']++;
  }
  function addQuestion($ques_id, $choice_id){


    return;


  }
  function getOptions($ques_id){


    return;
  }
  function getQuestions(){
      if($this->dispInterests() != null){

      }else{
        $sql = "SELECT * FROM questions";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $all = $stmt->fetchAll(PDO::FETCH_BOTH);
        $i=0;
        while($i < 10){
          if(isset($row[mt_rand(0,60)])){
            echo '<br/>'.$row[mt_rand(0,60)]['ques'].'<br/>';
            $this->getOptions($row[mt_rand(0,60)]['ques_id']);
            $i++;
            unset($row[mt_rand(0,60)]);
          }
        }


      }
}




}



 ?>
