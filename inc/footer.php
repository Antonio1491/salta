<div class="row expanded">
  <div class="column medium-4 text-center">
    <figure>
      <a href="http://www.parquesdemexico.org/consultora/" target="_blank">
        <img src="img/parques_de_mex_b.png" alt="">
      </a>
    </figure>
  </div>
  <div class="column medium-4 text-center">
    <figure>
      <a href="http://parques.salta.gob.ar/inicio/" target="_blank">
        <img src="img/coordinadora_de_parques_b.png" alt="">
      </a>
    </figure>
  </div>
  <div class="column medium-4 text-center">
    <figure>
      <a href="http://www.salta.gov.ar/" target="_blank">
        <img src="img/gob_salta_b.png" alt="">
      </a>
    </figure>
  </div>
</div>


<!-- contador -->
<script type="text/javascript">
  function countdown(id){
    var fecha=new Date('<?=$_SESSION['ano']?>','<?=$_SESSION['mes']?>','<?=$_SESSION['dia']?>','<?=$_SESSION['hora']?>','<?=$_SESSION['minuto']?>','<?=$_SESSION['segundo']?>')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0
      if (fecha>hoy){
          var diferencia=(fecha.getTime()-hoy.getTime())/1000
          dias=Math.floor(diferencia/86400)
          diferencia=diferencia-(86400*dias)
          horas=Math.floor(diferencia/3600)
          diferencia=diferencia-(3600*horas)
          minutos=Math.floor(diferencia/60)
          diferencia=diferencia-(60*minutos)
          segundos=Math.floor(diferencia)
          document.getElementById(id).innerHTML='<span class="faltan">FALTAN </span><span class="num_dias">' + dias + ' D&iacute;as </span>'  + horas + ':' + minutos + ':' + segundos
                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }
</script>

<script>/*google analytics*/
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-100039379-1', 'auto');
        ga('send', 'pageview');
    </script>
<!---->
