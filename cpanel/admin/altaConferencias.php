<?php session_start();
include('../class/funciones.php');

$conferencia = $_POST['conferencia'];
$conferencia_ing = addslashes($_POST['conferencia_ing']);
$fecha = $_POST['fecha'];
$hora = $_POST['inicio'];
$hora_fin = $_POST['fin'];
$lugar = $_POST['lugar'];
$tema = $_POST['tema'];
$tipo = $_POST['tipo'];
$descripcion = addslashes($_POST['descripcion']);
$descripcion_ing = addslashes($_POST['descripcion_ing']);
$objetivo1 = addslashes($_POST['objetivo1']);
$objetivo2 = addslashes($_POST['objetivo2']);
$objetivo3 = addslashes($_POST['objetivo3']);
$registro = new Conferencia();

$resultado = $registro->registrar($conferencia, $conferencia_ing, $fecha, $hora, $hora_fin,
                                  $lugar, $tema, $tipo, $descripcion, $descripcion_ing,
                                  $objetivo1, $objetivo2, $objetivo3);

if ($resultado) {

  $mensaje = header("Location:". getenv('HTTP_REFERER'));

  echo $mensaje;

  }
else{
  echo"<script language='JavaScript'>
      alert('Error: No pudimos realizar el registro');
      </script>";
  echo "<script>window.history.go(-1);</script>";
}


// $sql = "INSERT INTO conferencias VALUES (null, '$conferencia', '$fecha', '$hora', '$hora_fin', '$lugar',
//   '$descripcion', '$tema' )";
// $conexion->insertarDatos($sql);

 ?>
