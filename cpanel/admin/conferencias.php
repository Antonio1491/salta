<?php session_start();
include('../class/funciones.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alta de Conferencias</title>
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
          <h4>Conferencias</h4>
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
              <i class="fi-plus"></i> Agregar Conferencia
            </button>
          </div>
        </div>
        <div class="registro">
          <form class="" action="altaConferencias.php" method="post">
            <fieldset>
              <div class="row">
                <div class="column">
                  <legend><h5>Registro Conferencias</h5></legend>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="">Conferencia:</label>
                  <input type="text" name="conferencia" value="" placeholder="Nombre de la Conferencia" required>
                </div>
              </div>
              <div class="row ">
                <div class="column medium-8">
                  <label for="">Conference:</label>
                  <input type="text" name="conferencia_ing" value="" placeholder="Nombre de la Conferencia" required>
                </div>
              </div>
              <div class="row">
                <div class="column medium-2">
                  <label for="">Fecha (00/00/0000):</label>
                  <input type="date" name="fecha" value="" placeholder="Día/Mes/Año">
                </div>
                <div class="column medium-2">
                  <label for="">Hora Inicio:</label>
                  <input type="time" name="inicio" value="" placeholder="00:00:00">
                </div>
                <div class="column medium-2">
                  <label for="">Hora Fin:</label>
                  <input type="time" name="fin" value="" placeholder="00:00:00">
                </div>
                <div class="column medium-2">
                  <label for="">Lugar:</label>
                  <input type="text" name="lugar" value="">
                </div>
              </div>
              <div class="row ">
                <div class="column medium-4">
                  <label>Tema:
                    <select name="tema">
                      <?php
                          $lista_de_temas = new Conferencia();
                          $lista = $lista_de_temas->temas();
                          foreach ($lista as $valor) {
                            echo "<option value='".$valor['id_tema']."'>".$valor['tema']."</option>";

                          }
                      ?>
                    </select>
                  </label>
                </div>
                <div class="column medium-4">
                  <label>Tipo:
                    <select name="tipo">
                      <?php
                          $lista_tipo = new Conferencia();
                          $lista = $lista_de_temas->conferenciaTipo();
                          foreach ($lista as $valor) {
                            echo "<option value='".$valor['id_tipo']."'>".$valor['tipo']."</option>";
                          }
                      ?>
                    </select>
                  </label>
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
              <div class="row">
                <div class="column medium-8">
                  <label for="">Objetivo 1:</label>
                  <textarea name="objetivo1" rows="1" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles." required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="column medium-8">
                  <label for="">Objetivo 2:</label>
                  <textarea name="objetivo2" rows="1" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles." required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="column medium-8">
                  <label for="">Objetivo 3:</label>
                  <textarea name="objetivo3" rows="1" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles." required></textarea>
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
              $lista_conferencias = new Conferencia();
              $evento = "CPM2019";
              $respuesta = $lista_conferencias->listaConferencias($evento);

            echo "<table class='tablaResultados'>
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Lugar</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>";

                    foreach ($respuesta as $valor) {
                        echo "<tr>
                        <td>" .$valor['conferencia']. "</td>
                        <td>" .$valor['fecha']. "</td>
                        <td>" .$valor['inicio']. "</td>
                        <td>" .$valor['fin']. "</td>
                        <td>" .$valor['salon']. "</td>
                        <td class='acciones'><a href='editarConferencia.php?id=".$valor['id_conferencia']."' title='Editar'><i class='fi-pencil'></i></a> |
                        <a href='eliminarConferencia.php?id=".$valor['id_conferencia']."' title='Eliminar' class='eliminar'><i class='fi-x'></i> </a></td>
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
