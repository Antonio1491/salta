<?php
require ('../class/conexion.php');
include ('class/classRegistroPropuesta.php');

$registro = new Registro();
// datos personales del conferencista
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$email = $_POST['Email'];
$emailAsis = $_POST['EmailAsistente'];
$telefono = $_POST['Telefono'];
$cargo = $_POST['Cargo'];
$empresa = $_POST['Empresa'];
$pais = $_POST['Pais'];
$ciudad = $_POST['Ciudad'];
$experiencia = $_POST['Experiencia'];
$nombre_foto = $_FILES['fotografia']['name'];
$tipo_foto = $_FILES['fotografia']['type'];
$temporal_foto = $_FILES['fotografia']['tmp_name'];

$array = count($_POST['Nombre']);

// Datos sobre la sesión educativa
$sesion = $_POST['Sesion'];
$tema = $_POST['Tema'];
$descripcion = $_POST['Descripcion'];
$justificacion = $_POST['Justificacion'];
$objetivo1 = $_POST['Objetivo1'];
$objetivo2 = $_POST['Objetivo2'];
$objetivo3 = $_POST['Objetivo3'];
$modalidad = $_POST['Modalidad'];
// $nombre_documento= $_FILES['archivo']['name'];
// $tipo_documento = $_FILES['archivo']['type'];
// $temporal_documento = $_FILES['archivo']['tmp_name'];

$sesion = $registro->registroPropuesta($sesion, $tema, $descripcion, $justificacion, $objetivo1, $objetivo2, $objetivo3 , $modalidad);

$aspirante = $registro->registroAspirante($array, $nombre, $apellido, $email,
                                              $emailAsis, $telefono, $cargo, $empresa,
                                            $pais, $ciudad, $experiencia, $nombre_foto,
                                            $tipo_foto, $temporal_foto);


if ( $aspirante == true && $sesion == true ) {
  $envioCorreo = $registro->correoRegistroPropuesta($email, $sesion);
  echo header("Location: propuestaRegistrada.html");

}
else{
  echo"<script language='JavaScript'>
      alert('Error: No pudimos realizar el registro');
      </script>";
  echo "<script>window.history.go(-1);</script>";
}
 ?>
