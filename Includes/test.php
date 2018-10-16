<?php

class asd {

   private $var;

  public function set(){
    $this->var = 12;
  }
  function disp($var){
    echo $var;
  }
}

$obj = new asd();
$obj->set();
$obj->disp($obj->var);

 ?>
