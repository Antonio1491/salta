<?php session_start();
include('../class/funciones.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alta de Talleres</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/foundation/foundation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="../../js/vendor/what-input.js" type="text/javascript"></script>
    <script src="../../js/vendor/foundation.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="../js/app.js"></script> -->
    <script>
    $(document).foundation();

    $(document).ready(function(){
    $("#agregar").click(function(){
      $(".registro").fadeToggle();
    });
    });
    </script>
  </head>
  <body>
    <header>
      <div class="rows">
        <div class="column medium-10 medium-offset-2 text-center">
          <h4>Talleres</h4>
        </div>
      </div>
    </header>
    <main class="row expanded">
      <div class="medium-2">
        <?php include("inc/menu.php") ?>
      </div>
      <div class="column medium-10">
        <div class="row">
          <div class="column medium-12">
            <button type="button" name="button" id="agregar" class="button">
              <i class="fi-plus"></i> Agregar Taller
            </button>
          </div>
        </div>
        <div class="registro">
          <form class="" action="altaTaller.php" method="post" enctype="multipart/form-data">
            <fieldset>
              <div class="row">
                <div class="column">
                  <legend><h5>Registro Taller</h5></legend>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="">Taller:</label>
                  <input type="text" name="taller" value="" placeholder="Nombre de la Conferencia" required>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="">Workshop:</label>
                  <input type="text" name="taller_ing" value="" placeholder="Nombre de la Conferencia" required>
                </div>
              </div>
              <div class="row">
                <div class="column medium-2">
                  <label for="">Fecha (00/00/0000):</label>
                  <input type="date" name="fecha" value="" placeholder="Día/Mes/Año">
                </div>
                <div class="column medium-2">
                  <label for="">Inicio:</label>
                  <input type="time" name="inicio" value="" placeholder="00:00:00">
                </div>
                <div class="column medium-2">
                  <label for="">Fin:</label>
                  <input type="time" name="fin" value="" placeholder="00:00:00">
                </div>
                <div class="column medium-2">
                  <label for="">Capacidad:</label>
                  <input type="number" name="capacidad" value="" >
                </div>
              </div>
              <div class="row ">
                <div class="column medium-5">
                  <label for="">Tallerista:</label>
                  <input type="text" name="tallerista" value="" placeholder="" >
                </div>
                <div class="column medium-3">
                  <label>Tipo de taller:
                    <select name="tipo" required>
                      <option value="Vivencial">Vivencial</option>
                      <option value="Curricular">Curricular</option>
                    </select>
                  </label>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="file">Fotografía:</label>
                  <input type="file" name="fotografia" value="">
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="">Descripción:</label>
                  <textarea name="descripcion" rows="4" cols="80"></textarea>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="">Description:</label>
                  <textarea name="descripcion_ing" rows="4" cols="80"></textarea>
                </div>
              </div>

              <div class="row ">
                <input type="submit" name="" value="Registrar" class="button success">
              </div>
            </fieldset>
          </form>
        </div>

      <div class="row" id="listaConferencias">
          <?php
              $talleres = new Taller();
              $respuesta = $talleres->listaTalleres();
            echo "<table class='tablaResultados'>
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Taller</th>
                        <th>Workshop</th>
                        <th>fecha</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Capacidad</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>";
                    $num = 0;
                    foreach ($respuesta as $valor) {
                        $num++;
                        echo "<tr>
                        <td>".$num ."</td>
                        <td><img src='../../img/uploads/".$valor['foto']."'></td>
                        <td>" .$valor['taller']. "</td>
                        <td>" .$valor['taller_ing']. "</td>
                        <td>" .$valor['fecha']. "</td>
                        <td>" .$valor['inicio']. "</td>
                        <td>" .$valor['fin']. "</td>
                        <td>" .$valor['capacidad']. "</td>
                        <td>" .$valor['tipo']. "</td>
                        <td class='acciones'><a href='editarTaller.php?id=".$valor['id_taller']."' title='Editar'><i class='fi-pencil'></i></a> |
                        <a href='eliminarTaller.php?id=".$valor['id_taller']."' title='Eliminar' class='eliminar'><i class='fi-x'></i> </a></td>
                        </tr>";
                      }
                    echo "
                    </tbody>
                  </table>";
           ?>

      </div>
    </div>

    </main>
    <footer></footer>

  </body>
</html>
