<?php
// require('conexion.php');

class Temas extends Conexion{
  public function __construct(){
      parent::__construct();
  }

  public function ejesTematicos(){
    $sql= "SELECT * FROM temas WHERE id_tema > 1";
    $sql = $this->conexion_db->query($sql);
    $temas = $sql->fetch_all(MYSQLI_ASSOC);
    return $temas;
  }
}




 ?>
