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
      $resultado = $this->conexion_db->query("SELECT *
      FROM talleres
      WHERE id_taller = '$id' ");
      $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
      return $respuesta;
    }

    public function eliminarFoto($id){
      $sql = "SELECT foto FROM talleres WHERE id_taller = $id ";
      $consulta = $this->conexion_db->query($sql);
      $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
      foreach ($resultado as $valor) {
        unlink("../../img/uploads/".$valor['foto']);
      }
    }

    public function actualizar($taller, $taller_ing, $fecha,
                    $inicio, $fin, $capacidad, $tallerista, $tipo,
                    $descripcion, $descripcion_ing, $fotografia, $id){

      $eliminarFoto = $this->eliminarFoto($id);

      $sql = "UPDATE talleres SET
              taller = '$taller',
              taller_ing = '$taller_ing',
              descripcion = '$descripcion',
              descripcion_ing = '$descripcion_ing',
              fecha = '$fecha',
              inicio = '$inicio',
              fin = '$fin',
              tallerista = '$tallerista',
              capacidad = '$capacidad',
              tipo = '$tipo',
              foto = '$fotografia'
              WHERE id_taller = '$id'
              ";
      $consultar = $this->conexion_db->query($sql);
    }

    public function actualizarSinFoto($taller, $taller_ing, $fecha,
                    $inicio, $fin, $capacidad, $tallerista, $tipo,
                    $descripcion, $descripcion_ing, $id){
      $sql = "UPDATE talleres SET
              taller = '$taller',
              taller_ing = '$taller_ing',
              descripcion = '$descripcion',
              descripcion_ing = '$descripcion_ing',
              fecha = '$fecha',
              inicio = '$inicio',
              fin = '$fin',
              tallerista = '$tallerista',
              capacidad = '$capacidad',
              tipo = '$tipo'
              WHERE id_taller = '$id'
              ";
      $consultar = $this->conexion_db->query($sql);
    }


    public function eliminar($id){
     $sql = $this->conexion_db->query("DELETE FROM talleres
    WHERE id_taller = $id ");
     return $sql;
    }

  }

 ?>
