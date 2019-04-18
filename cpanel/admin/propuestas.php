<?php session_start();
include('../class/funciones.php');
$propuestas = new MostrarConferencia();
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/foundation/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
  </head>
  <body>
    <header>
      <div class="rows">
        <div class="column medium-10 medium-offset-2 text-center">
          <h4>Propuestas </h4>
        </div>
      </div>
    </header>
    <main class="row expanded">
      <div class="medium-2">
        <?php include("inc/menu.php") ?>
      </div>
      <section class="column medium-10">
        <?php
          $formateo = '%A %d %B %Y ';
          setlocale(LC_ALL, "es_ES");
          $mex = strftime($formateo);
          $total_propuestas = $propuestas->totalPropuestas(); echo "<br><p>Propuestas Registradas: ". $total_propuestas. " </p>";

          $array_propuestas = $propuestas->listaPropuestas();

          echo "<table class='tablaResultados'>
                <thead>
                  <tr>
                    <th>Folio</th>
                    <th>Propuesta</th>
                    <th>Modalidad</th>
                    <th>Autor</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Status</th>
                  </tr>
                </thead>";

                    $i=0;
                    foreach ($array_propuestas as $valor) {
                      $i += 1;
                      echo $x ="<tr id='".$valor['id_conferencia']."'>
                        <td>".$valor['id_conferencia']."</td>
                        <td><a href='descripcionPropuesta.php?id=".$valor['id_conferencia']."'>".$valor['conferencia']."<a></td>
                        <td>".$valor['modalidad']."</td>
                        <td>".$valor['nombre']." ".$valor['apellidos']."</td>
                        <td>".$valor['pais']."</td>
                        <td>".$valor['ciudad']."</td>";

                        if( $valor['status'] == NULL){
                            echo "<td><a href='aceptarPropuesta.php?id=".$valor['id_conferencia']."'>Aprobar</a></td>";
                        }
                        else{
                          echo "<td class='aceptada'>Aceptada</a></td>";
                        }

                      echo "</tr> ";

        }

        echo"</table>";


         ?>
      </section>
    </main>
    <footer></footer>

  <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
  <script src="../js/what-input.js" type="text/javascript"></script>
  <script src="../js/foundation.min.js" type="text/javascript"></script>
  <script>
    $(document).foundation();
  </script>

  </body>
</html>
