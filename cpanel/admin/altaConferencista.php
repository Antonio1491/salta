<?php session_start();
include('../class/funciones.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alta Usuarios</title>
  </head>
<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$cargo = $_POST['cargo'];
$cargo_ing = $_POST['cargo_ing'];
$empresa = $_POST['empresa'];
$empresa_ing = $_POST['empresa_ing'];
$conferencia = $_POST['conferencia'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$biografia = addslashes($_POST['biografia']);
$biografia_ing = addslashes($_POST['biografia_ing']);
$fotografia = $_FILES['fotografia']['name'];
// $prioridad = $_POST['prioridad'];
$nivel = 2;

$insertar = new Conferencistas();

$credencial = $insertar->registroCredencial($usuario, $password);

$resultado = $insertar->registroConferencista($nombre, $apellidos, $cargo, $cargo_ing, $empresa,
                                          $empresa_ing, $biografia, $biografia_ing, $pais, $ciudad, $fotografia,
                                          $conferencia);

    if ($credencial == true && $resultado == true) {

      $extraerNombre = $_FILES['fotografia']['tmp_name'];
      $destino = "../../registros/upload/".$fotografia ;
      copy($extraerNombre, $destino);

      $mensaje = header("Location:". getenv('HTTP_REFERER'));

      echo $mensaje;

      }
    else{
      echo"<script language='JavaScript'>
          alert('Error: No pudimos realizar el registro');
          </script>";
      echo "<script>window.history.go(-1);</script>";
    }

 ?>
</html>
