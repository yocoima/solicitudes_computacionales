<?php

class solicitudController{

  public function index(){
    echo "controlador de solicitud, accion index";
  }
  public function save(){
    if (isset($_POST)) {
      var_dump($_POST);
    }
  }
}

?>
