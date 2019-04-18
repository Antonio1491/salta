<?php
class Conferencia extends Conexion{

    public function __construct(){

      parent::__construct();

    }

    public function listaConferencias(){
      $sql = "SELECT *
              FROM conferencias WHERE status = 'aceptada' ";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);
      return $conferencias;
    }
  }

 ?>
