<footer class="site-footer">
      <div class=" lista-footer contenedor clearfix">
        <div class="gdl">
          <h3>Sobre <span>gdlwebcamp</span></h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam necessitatibus repellat autem id, consectetur magnam similique eum illum placeat, ratione aliquam. Accusantium illo debitis tempora nostrum incidunt? Sed, at officia.
          </p>
        </div>
  
        <div class="ultimos-tweets">
          <h3>últimos <span>tweets</span></h3>
          <ul>
            <li> Lorem ipsum dolor sit amet elit. Facere dolorum sint quas iusto corporis.</li>
            <li> Lorem ipsum dolor sit amet adipisicing elit. Facere dolorum sint quas iusto corporis laboriosam beatae.</li>
            <li> Lorem ipsum dolor sit amet adipisicing elit. Facere dolorum sint quas iusto corporis laboriosam beatae.</li>
          </ul>
        </div>
  
        <div class="menu-redes">
          <h3>Redes <span>sociales</span></h3>
          <nav class="redes-sociales">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </nav>
        </div>
      </div>
      <div class="derechos"><p>Todos los derechos Reservados GDLWEBCAMP 2022&copy;</p></div>
    </footer>
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>

  <?php 
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if($pagina == 'invitados' || $pagina == 'index') {
      echo '<script src="js/jquery.colorbox-min.js"></script>';
 } else if($pagina == 'conferencia') {
      echo '<script src="js/lightbox.js"></script>';
 }
?>

  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <script src="js/mapa.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>