<?php session_start();
include('../class/funciones.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alta Taller</title>
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
$extraerNombre = $_FILES['fotografia']['tmp_name'];
$destino = "../../img/uploads/".$fotografia ;

$insertar = new Taller();
$nuevoTaller = $insertar->registrarTaller($taller, $taller_ing, $fecha,
                $inicio, $fin, $capacidad, $tallerista, $tipo,
                $descripcion, $descripcion_ing, $fotografia);

    if ($nuevoTaller) {
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
