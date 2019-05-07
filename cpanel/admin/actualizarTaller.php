<?php session_start();
$id = $_GET['id'];
include('../class/funciones.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Taller</title>
  </head>
<?php

$taller= $_POST['taller'];
$taller_ing= $_POST['taller_ing'];
$fecha = $_POST['fecha'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$capacidad = $_POST['capacidad'];
$tallerista = $_POST['tallerista'];
$tipo = $_POST['tipo'];
$descripcion = addslashes($_POST['descripcion']);
$descripcion_ing = addslashes($_POST['descripcion_ing']);

$fotografia = $_FILES['fotografia']['name'];


$actualizar = new Taller();

if ($_FILES['fotografia']['name'] == "") {
  //Actualizar sin foto nueva
  $actualizarTaller = $actualizar->actualizarSinFoto($taller, $taller_ing, $fecha,
                  $inicio, $fin, $capacidad, $tallerista, $tipo,
                  $descripcion, $descripcion_ing, $id);

  $mensaje = "<script>window.history.go(-2);</script>";
  echo $mensaje;

}
else{
  $actualizarTaller = $actualizar->actualizar($taller, $taller_ing, $fecha,
                  $inicio, $fin, $capacidad, $tallerista, $tipo,
                  $descripcion, $descripcion_ing, $fotografia, $id);

  $extraerNombre = $_FILES['fotografia']['tmp_name'];
  $destino = "../../img/uploads/".$fotografia ;
  copy($extraerNombre, $destino);

  $mensaje = "<script>window.history.go(-2);</script>";
  echo $mensaje;

}

?>
</html>
