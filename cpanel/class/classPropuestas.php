<?php
// ==========   Propuestas   ===============

class MostrarConferencia extends Conexion{

    public function __construct(){

      parent::__construct();

    }

    // public function listaConferencias($evento){
    //   $sql = "SELECT *
    //           FROM conferencias
    //           WHERE evento = '$evento'
    //           ORDER BY id_conferencia DESC";
    //   $resultado = $this->conexion_db->query($sql);
    //   $conferencias = $resultado->fetch_all(MYSQLI_ASSOC);
    //   return $conferencias;
    // }

    // public function tipoConferencia(){
    //   $resultado = $this->conexion_db->query('SELECT * FROM tipo_conferencia');
    //   $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
    //   return $respuesta;
    // }

    public function listaPropuestas(){  //Lista de propuestas registradas en la convocatoria
      $resultado = $this->conexion_db->query('SELECT DISTINCT a.id_conferencia, a.conferencia, a.modalidad, a.status, b.nombre,
                                            b.apellidos, b.pais, b.ciudad FROM conferencias AS a
                                            INNER JOIN aspirante AS b
                                            ON a.id_conferencia = b.id_conferencia
                                            GROUP BY id_conferencia');
      $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
      return $respuesta;
    }

    //Asignasión de tema a usuario comité
    // public function propuestasAsignadas($id_tema){
    //   $resultado = $this->conexion_db->query("SELECT DISTINCT a.id_conferencia, a.conferencia, a.id_tema, b.nombre,
    //                                         b.apellidos, b.localidad FROM conferencia AS a
    //                                         INNER JOIN conferencista AS b
    //                                         ON a.id_conferencia = b.id_conferencia
    //                                         WHERE a.id_tema = $id_tma
    //                                         GROUP BY id_conferencia");
    //   $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
    //   return $respuesta;
    // }

    public function descripcionPropuesta($id){
      $sql = "SELECT * FROM conferencias
              INNER JOIN temas ON conferencias.id_tema = temas.id_tema
              WHERE  conferencias.id_conferencia= $id ";
      $consulta = $this->conexion_db->query($sql);
      $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
      return $respuesta;

    }

    public function mostrarAutores($id){
      $sql = "SELECT *
            FROM aspirante
            WHERE $id= id_conferencia";
      $consulta = $this->conexion_db->query($sql);
      $array = $consulta->fetch_all(MYSQLI_ASSOC);
      return $array;
    }

    //Muestra el número de conferencias registradas en la convocatoria (valor null en la tabla)
    public function totalPropuestas(){
      $consulta = $this->conexion_db->query("SELECT count(id_conferencia) AS totalRegistros FROM conferencias WHERE status IS NULL ");
      $respuesta = $consulta->fetch_all(MYSQLI_ASSOC);
      foreach ($respuesta as $value) {
        $resultado = $value['totalRegistros'];
      }
      return $resultado;
    }

    //Aceptacion de propuesta registrada (cambio de status)
    public function aceptarPropuesta($id_propuesta){
      $sql= "UPDATE conferencias SET status = 'aceptada' WHERE id_conferencia = $id_propuesta";
      $consulta = $this->conexion_db->query($sql);
      return $consulta;
    }



}


 ?>
