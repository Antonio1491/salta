<?php
class Taller extends Conexion{

    public function __construct(){

      parent::__construct();

    }

    public function listaTalleres(){
      $sql = "SELECT * FROM talleres ORDER BY id_taller DESC";
      $resultado = $this->conexion_db->query($sql);
      $talleres = $resultado->fetch_all(MYSQLI_ASSOC);
      return $talleres;
    }

    public function registrarTaller($taller, $taller_ing, $fecha,
                    $inicio, $fin, $capacidad, $tallerista, $tipo,
                    $descripcion, $descripcion_ing, $fotografia){
      $sql = "INSERT INTO talleres VALUES
      (null, '$taller', '$taller_ing', '$descripcion', '$descripcion_ing',
      '$fecha', '$inicio', '$fin', '$tallerista', '$capacidad', '$tipo', '$fotografia')";
      $resultado = $this->conexion_db->query($sql);
      return $resultado;
    }

    public function mostrarTaller($id){
      $resultado = $this->conexion_db->query("SELECT a.conferencia,
      a.conferencia_ing, a.descripcion, a.descripcion_ing, a.objetivo1,
      a.objetivo2, a.objetivo3, a.fecha,
      a.inicio, a.fin, a.salon, b.id_tema, b.tema
      FROM conferencias AS a
      LEFT JOIN temas as b ON b.id_tema = a.id_tema
      WHERE id_conferencia = '$id' ");
      $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
      return $respuesta;
    }

    public function eliminar($id){
     $sql = $this->conexion_db->query("DELETE FROM talleres
    WHERE id_taller = $id ");
     return $sql;
    }

  }

 ?>
