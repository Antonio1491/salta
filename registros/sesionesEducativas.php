<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro Propuestas | Congreso Parques Sudamérica</title>
    <link rel="stylesheet" href="../css/foundation/foundation.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="../css/foundation-flex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">-->

    <?php
    require ('../class/conexion.php');
    include ('class/classRegistroPropuesta.php');
    include ('../class/classEjes.php');
    ?>
  </head>
  <body>
    <header>
      <div class="logo-header">
        <a href="https://congresoparques.com/">
          <figure>
            <img src="img/logotipo_congreso_sudamerica_b.png" alt="">
          </figure>
        </a>
      </div>
      <div class="">
        <h4 class="">Congreso Parques Sudamérica</h4>
      </div>
    </header>
    <section class="row container">
      <div class="item instrucciones">

        <p class="text-center"><strong>Convocatoria 2019 - Registro de Propuestas</strong></p>
         <p>¡Gracias por tu interés en formar parte del programa del 1er Congreso Sudaméricano de Parques Urbanos 2019. Por favor, llena este formulario para el registro de tu propuesta. Te recordamos que:</p>
          <ul>
            <li>El envío de la propuesta no garantiza su aceptación, ni tu registro como asistente del congreso.</li>
            <li>Recibirás los resultados de la convocatoria en las fechas establecidas.</li>
            <li>Si tu propuesta es una “Mesa panel” más de una persona, es importante registrar a todas las personas.</li>
            <li>Fotografía: Cargar una fotografía del ponente a color y con buena resolución.</li>
          </ul>
          <p>La convocatoria para sesiones educativas tiene como objetivo recibir información sobre proyectos alrededor de todo el mundo que quieran ser presentados en el 1er Congreso Sudaméricano de Parques Urbanos 2019.
          Las propuestas recibidas con más probabilidad de ser aceptadas para formar parte del programa son, aquellas que se apeguen a nuestras 5 temáticas.
          </p>
          <ol class="listaTemas">
            <?php
            $temas = new Temas();
            $ejesTematicos = $temas->ejesTematicos();
            foreach ($ejesTematicos as $valor) {
              echo "<li><a href='#' data-open='t".$valor['id_tema']."'>".$valor['tema']."</a></li>";
              echo"<div class='reveal descripcionTema' id='t".$valor['id_tema']."' data-reveal>
                  <div class='text-center'><img src='img/".$valor['icono']."'></div>
                  <h1 class='text-center'>".$valor['tema']."</h1>
                  <p>".$valor['descripcion']."</p>
                  <button class='close-button' data-close aria-label='Close reveal' type='button'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>";
            }
            ?>
          </ol>

          <p><strong>Las propuestas serán revisadas y seleccionadas por nuestro Consejo de Contenido integrado por:</strong></p>
          <ul class="consejo">
            <li>Mariel Rivera, Gerente Ejecutiva, Fundación Convive Mejor. Tegucigalpa, Honduras.</li>
            <li>Lorena Martínez, Directora de Áreas Verde y Educación Ambiental, Fundación Xochitla A.C.</li>
            <li>Mariana Inés Prone, Administradora Unidad Coordinadora de Parques Urbanos de la Provincia de Salta, Gobierno de la Provincia de Salta.</li>
            <li>Luis Antonio Romahn Diez, Director, Congreso Parques.</li>
            <li>Cristina R. de León Golib, Directora de Contenido y Educación, Congreso Parques.</li>
          </ul>

        Si tienes dudas o inconvenientes para llenar este formulario, comunícate con Cristina R. de León, Directora de Contenido y Educación a la dirección: <a href="mailto:contenido@congresoparques.com">contenido@congresoparques.com</a></p>

      </div>
      <div class="item">
        <form class="" action="guardarSesion.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              Sobre el responsable de la propuesta:
            </div>
          </fieldset>
          <div class="form_autor">
            <div class="row">
              <div class="column medium-6">
                <label for="">Nombre:</label>
                <input type="text" name="Nombre[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">Apellidos:</label>
                <input type="text" name="Apellidos[]" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">E-mail:</label>
                <input type="text" name="Email[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">E-mail de Asistente:</label>
                <input type="text" name="EmailAsistente[]" value="" placeholder="(en caso de contar con uno)">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">Teléfono:</label>
                <input type="text" name="Telefono[]" value="" placeholder="(Clave del País, Clave Nacional, Teléfono)">
              </div>
              <div class="column medium-6">
                <label for="">Puesto de Trabajo/Cargo:</label>
                <input type="text" name="Cargo[]" value="">
              </div>
            </div>
            <div class="row">
              <div class="column ">
                <label for="">Empresa/Institución</label>
                <input type="text" name="Empresa[]" value="" >
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">País:</label>
                <input type="text" name="Pais[]" value="" placeholder="" required>
              </div>
              <div class="column medium-6">
                <label for="">Ciudad:</label>
                <input type="text" name="Ciudad[]" value="" placeholder="">
              </div>
            </div>
            <div class="row column">
              <label for="">Semblanza profesional:</label>
              <textarea name="Experiencia[]" rows="3" cols="80" placeholder="Incluya experiencia de trabajo, investigaciones, colaboraciones o información de relevancia. Esta descripción deberá ser una breve biografía."></textarea>
            </div>
            <div class="row column">
              <img src="img/icono_perfil.png" alt="" class="perfil">
              <label for="">Fotografía: (Perfil del ponente, medidas recomendadas 800px por 800px) </label>
              <input type="file" name="fotografia[]" value="" required accept="image/png, .jpeg, .jpg">
            </div>
          </div>

          <div class="row ">
            <div class="column">
              <label for="">Modalidad:</label>
              <input type="radio" name="Modalidad" value="Individual"  id="individual" required> Individual</input>
              <input type="radio" name="Modalidad" value="Mesa Panel" id="mesaPanel" required> Mesa Panel (2 participantes máximo)</input>
            </div>
          </div>
          <div class="ocultar" id="btnAgregar">
            <div class="row column text-center" id="">
              <button type="button" name="Autor" class="button alert addButton " id="autor"><i class="fi-plus"></i> Añadir Ponente</button>
            </div>
          </div>
          <div class="nuevo">
          </div>


          <div class=" encabezado">
              Sobre la propuesta:
          </div>
          <div class="row column">
            <label for="">Nombre de la Sesión (12 palabras máximo):</label>
            <input type="text" name="Sesion" value="" required>
          </div>
          <div class="row column">
            <label for="">Temática:</label>
            <select class="" name="Tema">
              <?php
              $temas = new Registro();
              $array_temas = $temas->desplegarTemas();

                foreach ($array_temas as $valor) {
                echo "<option value='".$valor['id_tema']."'>".$valor['tema']."</option>";
                }
              ?>
            </select>
          </div>
          <div class="row column">
            <label for="">Descripción (220 palabras máximo):</label>
            <textarea name="Descripcion" rows="3" cols="80" placeholder="(Esta información se utilizará con fines promocionales, por favor sea conciso y claro. )" required></textarea>
          </div>
          <div class="row column">
            <label for="">Justificación (No hay límites de palabras):</label>
            <textarea name="Justificacion" rows="3" cols="80" placeholder="Justifique la importancia de su sesión educativa propuesta, identificando cómo su proyecto/iniciativa/investigación da solución a un problema relacionado con el espacio público y cómo se relaciona con las cinco temáticas del congreso." required></textarea>
          </div>
          <div class="row column">
            <label for="">Objetivo 1:</label>
            <textarea name="Objetivo1" rows="1" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles." required></textarea>
          </div>
          <div class="row column">
            <label for="">Objetivo 2:</label>
            <textarea name="Objetivo2" rows="1" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles." required></textarea>
          </div>
          <div class="row column">
            <label for="">Objetivo 3:</label>
            <textarea name="Objetivo3" rows="1" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles." required></textarea>
          </div>
          <!-- <div class="row column">
            <label for="">Agregar Documento:</label>
            <input type="file" name="archivo" value="" >
          </div> -->


          <div class="text-center">
            <input type="submit" name="" value="Registrar Propuesta" class="button alert">
          </div>
        </form>
      </div>
    </section>
    <script src="../js/vendor/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="../js/vendor/foundation.min.js"></script>
    <script>
    $(document).foundation();
    </script>
    <script type="text/javascript">
      $(function(){
        var maxAutor = 2;
        var addBtn = $('.addButton');
        var nuevo = $('.nuevo');
        var titulo = '<div class="encabezado">Autor:</div>';
        var formAutor = titulo + $('.form_autor').html();

        var x = 1;

        $(addBtn).click(function(){
          if (x < maxAutor) {
            x++;

            $(nuevo).append(formAutor);
          }
        });
      });

      $(function(){
        $('#mesaPanel').mousedown(function(){
          $('#btnAgregar').slideDown(1000).removeClass('ocultar');
        })
        $('#individual').mousedown(function(){
          $('#btnAgregar').slideUp(1000).addClass('ocultar');
        })
      });
    </script>
  </body>
</html>
