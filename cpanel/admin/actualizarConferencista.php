<?php session_start();
$id = $_GET['id'];
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

$actualizar = new Conferencistas();

if ($_FILES['fotografia']['name'] == "") {
  //Actualizar sin foto nueva
  $actualizarConferencista = $actualizar->actualizarSinFoto($usuario, $password, $nombre, $apellidos, $cargo, $cargo_ing, $empresa, $empresa_ing,
                                   $biografia, $biografia_ing, $pais, $ciudad, $conferencia, $id);

  $mensaje = "<script>window.history.go(-2);</script>";
  echo $mensaje;

}
else{
  $actualizarConferencista = $actualizar->actualizarConferencista($usuario, $password, $nombre, $apellidos, $cargo, $cargo_ing, $empresa, $empresa_ing,
                                   $biografia, $biografia_ing, $pais, $ciudad, $fotografia, $conferencia, $id);

  $extraerNombre = $_FILES['fotografia']['tmp_name'];
  $destino = "../../registros/upload/".$fotografia ;
  copy($extraerNombre, $destino);

  $mensaje = "<script>window.history.go(-2);</script>";
  echo $mensaje;

}


// if ($resultado) {
//
//           $mensaje = "<script>window.history.go(-2);</script>";
//
//           echo $mensaje;
//     }
//     else{
//     echo"<script language='JavaScript'>
//     alert('Error: No pudimos actualizar');
//     </script>";
//     echo "<script>window.history.go(-2);</script>";
//     }

?>
</html>
