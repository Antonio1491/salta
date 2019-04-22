<?php
class Conferencistas extends Conexion{   //utilizar variables y métodos dentro la clase conexión

  public function __construct(){

      parent::__construct();

  }

  public function get_usuarios(){//despliega listas de conferencistas
      $resultado = $this->conexion_db->query("SELECT * FROM conferencistas
                                              ORDER BY id_conferencista DESC");

      $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);

      return $usuarios;
  }

  //Validación del status de permisos (visualización en tabla)
  public function firma($firma){
    if (is_null($firma)) {
      $respuesta = "<i class='fi-alert firma_pendiente'></i>";
    } else if($firma == 0){
      $respuesta = "<i class='fi-x firma_no'></i>";
    }
    else if ($firma == "1"){
        $respuesta = "<i class='fi-checkbox firma_ok'></i>";
    }
    return $respuesta;
  }

  //registrar credencial de conferencista
  public function registroCredencial($us, $pass){
    $sql = "INSERT INTO credenciales VALUES (null, '$us', '$pass', '2' )";
    $consulta = $this->conexion_db->query($sql);
    return $consulta;
  }

  //asignar id_credenciales
  public function idCredencial(){
    $resultado = $this->conexion_db->query('SELECT max(id_credenciales) AS max_idCredencial FROM credenciales');

    $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);

    foreach ($respuesta as $valor) {
      echo $id = $valor['max_idCredencial'];
    }

    return $id;

  }

  //registro de confrencistas
  public function registroConferencista($nombre, $apellidos, $cargo, $cargo_ing, $empresa,
                                            $empresa_ing, $biografia, $biografia_ing, $pais,
                                            $ciudad, $fotografia, $conferencia){

      $id_credencial = $this->idCredencial();
      $resultado = $this->conexion_db->query("INSERT INTO conferencistas
                                              VALUES ( null, '$nombre', '$apellidos', '$cargo','$cargo_ing',
                                                '$empresa', '$empresa_ing', '$biografia', '$biografia_ing',
                                                '$pais', '$ciudad', '$fotografia',
                                                null, null, null,'$conferencia', '$id_credencial')");

      return $resultado;

  }

  //Mostrar los datos del conferencista para editar
  public function mostrarDatosEdit($id){

   $resultado = $this->conexion_db->query("SELECT a.nombre, a.apellidos, a.cargo, a.cargo_ing, a.empresa, a.empresa_ing,
     a.biografia, a.biografia_ing, a.pais, a.ciudad, b.id_conferencia, b.conferencia
   FROM conferencistas AS a
   RIGHT JOIN conferencias AS b ON b.id_conferencia = a.id_conferencia
   WHERE id_conferencista = $id ");

   $datos = $resultado->fetch_all(MYSQLI_ASSOC);

   return $datos;

 }

//Actualizar datos del conferencista sin foto
 public function actualizarSinFoto($usuario, $password, $nombre, $apellidos, $cargo, $cargo_ing, $empresa, $empresa_ing,
                                  $biografia, $biografia_ing, $pais, $ciudad, $conferencia, $id){

      $sql = "UPDATE usuarios SET nombre = '$nombre',
            apellidos = '$apellidos',
            cargo = '$cargo',
            cargo_ing = '$cargo_ing',
            empresa = '$empresa',
            empresa_ing = '$empresa_ing',
            biografia = '$biografia',
            biografia_ing = '$biografia_ing',
            pais = '$pais',
            ciudad = '$ciudad',
            id_conferencia = '$conferencia'
            WHERE id_usuario = '$id' ";

      $resultado = $this->conexion_db->query($sql);

        if ($resultado) {
          $sql = "SELECT id_credenciales FROM conferencistas WHERE id_conferencista = $id";
          $consulta = $this->conexion_db->query($sql);
          $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

          foreach ($resultado as $valor) {
            $credencial = $valor['id_credenciales'];
          }
          $sql = "UPDATE credenciales SET
                  usuario = '$usuario',
                  password = '$password'
                  WHERE id_credenciales = $credencial";

          $consulta = $this->conexion_db->query($sql);
          $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

            return true;
        }
        else{
          $error = "No pudimos realizar la actualización";
          return $error;
        }

            return false;

  }

  //Actualizar datos del conferencista con foto nueva
   public function actualizarConferencista($usuario, $password, $nombre, $apellidos, $cargo, $cargo_ing, $empresa, $empresa_ing,
                                    $biografia, $biografia_ing, $pais, $ciudad, $fotografia, $conferencia, $id){

        $sql = "UPDATE usuarios SET nombre = '$nombre',
              apellidos = '$apellidos',
              cargo = '$cargo',
              cargo_ing = '$cargo_ing',
              empresa = '$empresa',
              empresa_ing = '$empresa_ing',
              biografia = '$biografia',
              biografia_ing = '$biografia_ing',
              pais = '$pais',
              ciudad = '$ciudad',
              foto = '$fotografia',
              id_conferencia = '$conferencia'
              WHERE id_usuario = '$id' ";

        $consulta = $this->conexion_db->query($sql);

        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        return $resultado;

      }

 // Eliminar conferencista
  public function eliminar($id){

    $sql = $this->conexion_db->query("DELETE FROM conferencistas WHERE id_conferencista = $id ");

    return $sql;

  }


}

 ?>
