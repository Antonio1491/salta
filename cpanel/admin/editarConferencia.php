<?php session_start();
$id = $_GET['id'];
include('../class/funciones.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
        <div class="">
          <?php

            $traer_datos = new Conferencia();

            $resultado = $traer_datos->mostrarConferencia($id);

            foreach ($resultado as $valor) {

            echo '<form class="" action="actualizarConferencia.php?id='.$id.'" method="post">
                  <fieldset>
                    <div class="row">
                      <div class="column medium-8">
                        <legend><h5>Edición de conferencia</h5></legend>
                      </div>
                    </div>
                    <div class="row ">
                      <div class="column medium-8">
                        <label for="">Conferencia:</label>
                        <input type="text" name="conferencia" value="'.$valor['conferencia'].'" placeholder="Nombre de la Conferencia" required>
                      </div>
                    </div>
                    <div class="row ">
                      <div class="column medium-8">
                        <label for="">Conference:</label>
                        <input type="text" name="conferencia_ing" value="'.$valor['conferencia_ing'].'" placeholder="Nombre de la Conferencia" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="column medium-2">
                        <label for="">Fecha (00/00/0000):</label>
                        <input type="date" name="fecha" value="'.$valor['fecha'].'" placeholder="Día/Mes/Año">
                      </div>
                      <div class="column medium-2">
                        <label for="">Inicio:</label>
                        <input type="time" name="hora" value="'.$valor['inicio'].'" placeholder="00:00">
                      </div>
                      <div class="column medium-2">
                        <label for="">Fin:</label>
                        <input type="time" name="hora_fin" value="'.$valor['fin'].'" placeholder="00:00:00">
                      </div>
                      <div class="column medium-2">
                        <label for="">Lugar:</label>
                        <input type="text" name="lugar" value="'.$valor['salon'].'">
                      </div>
                    </div>
                    <div class="row ">
                    <div class="column medium-4">
                      <label>Tipo:
                        <select name="tipo">
                        <option value="'.$valor['id_tipo'].'">'.$valor['tipo'].'</option>';
                            $listaTipo = new Conferencia();
                            $lista = $listaTipo->conferenciaTipo();
                            foreach ($lista as $value) {
                              echo'<option value="'.$value['id_tipo'].'">'.$value['tipo'].'</option>';
                              }

                    echo '  </select>
                      </label>
                    </div>
                    <div class="column medium-4">
                      <label>Tema:
                      <select name="tema">
                        <?php
                            $lista_de_temas = new Conferencia();
                            $lista = $lista_de_temas->temas();
                            foreach ($lista as $valor) {
                              echo "<option value="'.$valor['id_tema'].'">'.$valor['tema'].'</option>";

                            }
                        ?>
                      </select>
                      </label>
                    </div>
                  </div>


                    <div class="row ">
                    <div class="column medium-8">
                      <label for="">Descripción:</label>
                      <textarea name="descripcion" rows="4" cols="1" value="'.$valor['descripcion'].'">'.$valor['descripcion'].'</textarea>
                    </div>
                    </div>

                    <div class="row ">
                    <div class="column medium-8">
                      <label for="">Description:</label>
                      <textarea name="descripcion_ing" rows="4" cols="1" value="'.$valor['descripcion_ing'].'">'.$valor['descripcion_ing'].'</textarea>
                    </div>
                    </div>
                    <div class="row">
                      <div class="column medium-8">
                        <label for="">Objetivo 1:</label>
                        <textarea name="objetivo1" rows="1" cols="80" value="'.$valor['objetivo1'].'"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="column medium-8">
                        <label for="">Objetivo 2:</label>
                        <textarea name="objetivo2" rows="1" cols="80" value="'.$valor['objetivo2'].'"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="column medium-8">
                        <label for="">Objetivo 3:</label>
                        <textarea name="objetivo3" rows="1" cols="80" value="'.$valor['objetivo3'].'"></textarea>
                      </div>
                    </div>

                    <div class="row ">
                      <input type="submit" name="" value="Actualizar" class="button success">
                    </div>
                  </fieldset>
              </form>

          </div>';
}
 ?>
