<?php include("class/reloj.php") ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso Parques Sudámerica</title>
    <?php require("inc/head.php"); ?>
  </head>
  <body  onload="countdown('contador'), countdown('contador-small')">
    <main>
      <header id="portada" class="contenedorPortada">
        <div class="itemContenidoPortada">
          <figure class="logotipo">
            <img src="img/congreso_parques_sudamerica.png" alt="Congreso Parques Sudamérica">
          </figure>
        </div>
        <div class="itemContenidoPortada">
          <div class="fecha">
            <h4 id="">6-9 Octubre 2019</h4>
            <h5>provincia de salta - Argentina</h5>
          </div>
          <div class="contador">
                <div id='contador'>
                </div>
              </div>
        </div>
        <div class="itemContenidoPortada ">
          <div class="tableroFechas">
            <h4>Convocatoria Sesiones educativas</h4>
            <ul>
              <li>Apertura: <span>8 de abril</span></li>
              <li>Cierre: <span>31 de Mayo</span></li>
              <li>Resultados: <span>1 de Julio</span></li>
            </ul>
            <div class="nota">
              <span>Inscripciones: Apartir de Julio</span>
            </div>
          </div>
          <div class=" text-center">
            <a href="registros/sesionesEducativas.php" class="btnRojo">Registro <strong>convocatoria</strong></a>
          </div>
        </div>
        <!-- <div class="itemContenidoPortada">

        </div> -->
      </header>
      <footer>
        <?php include "inc/footer.php" ?>
      </footer>
    </main>
  </body>
</html>
