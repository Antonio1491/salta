<?php
class Conferencia extends Conexion{

    public function __construct(){

      parent::__construct();

    }

    public function listaConferencias(){
      $sql = "SELECT * FROM conferencias
      WHERE status = 'aceptada'
      ORDER BY id_conferencia DESC";
      $resultado = $this->conexion_db->query($sql);
      $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);
      return $conferencias;
    }

    public function temas(){
      $sql = "SELECT * FROM temas";
      $resultado = $this->conexion_db->query($sql);
      $tipoConferencia = $resultado->fetch_all(MYSQLI_ASSOC);
      return $tipoConferencia;
    }

    public function conferenciaTipo(){
      $sql = "SELECT * FROM tipo_conferencia";
      $resultado = $this->conexion_db->query($sql);
      $tipoConferencia = $resultado->fetch_all(MYSQLI_ASSOC);
      return $tipoConferencia;
    }

    public function mostrarConferencia($id){
      $resultado = $this->conexion_db->query("SELECT a.conferencia,
      a.conferencia_ing, a.id_tema, a.id_tipo, a.descripcion, a.descripcion_ing, a.objetivo1,
      a.objetivo2, a.objetivo3, a.fecha,
      a.inicio, a.fin, a.salon, b.id_tema, b.tema, c.tipo
      FROM conferencias AS a
      LEFT JOIN temas as b ON b.id_tema = a.id_tema
      LEFT JOIN tipo_conferencia as t ON t.id_tipo = a.id_tipo
      WHERE a.id_conferencia = '$id' ");
      $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
      return $respuesta;
    }

    public function registrar($conferencia, $conferencia_ing, $fecha, $hora, $hora_fin,
                                      $lugar, $tema, $tipo, $descripcion, $descripcion_ing,
                                      $objetivo1, $objetivo2, $objetivo3){
      $sql = "INSERT INTO conferencias VALUES
      (null, '$conferencia', '$conferencia_ing', '$tema', '$tipo', '$descripcion',
      '$descripcion_ing', null, '$objetivo1', '$objetivo2', '$objetivo3', null, 'aceptada',
      '$fecha', '$hora', '$hora_fin', '$lugar')";
      $resultado = $this->conexion_db->query($sql);
      return $resultado;
    }

    public function eliminar($id){
     $sql = $this->conexion_db->query("DELETE FROM conferencias WHERE id_conferencia = $id ");
     return $sql;
    }

  }

 ?>
