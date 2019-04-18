<?php session_start();
$_SESSION['id_usuario'] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Cpanel CPS2019</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/foundation/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
  </head>
  <body>
    <header>
      <div class="rows">
        <div class="column medium-10 medium-offset-2 text-center">
          <h4>Cpanel Congreso Parques, Salta 2019</h4>
        </div>
      </div>
    </header>
    <main class="row expanded">
      <div class="medium-2">
        <?php include("inc/menu.php") ?>
      </div>
      <section class="column medium-10">

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
