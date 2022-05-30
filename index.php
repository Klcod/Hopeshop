<?php include_once 'includes/templates/header.php';?>
  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.
    </p>
  </section><!--seccion-->
  <section class="programa">
    <div class="slider">
      <ul>
        <li><img src="slider/slider1.jpg" alt=""></li>
        <li><img src="slider/slider2.jpg" alt=""></li>
        <li><img src="slider/slider3.jpg" alt=""></li>
        <li><img src="slider/slider4.jpg" alt=""></li>
      </ul>
    </div> <!--.slider-->
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres </a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias </a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminario </a>
          </nav>

          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 Y JAVASCRIPT</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Victor Pat</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Desing</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Victor Pat</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--#talleres-->
          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchéz</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologías del Futuro</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchéz</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--#talleres-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para móviles</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i>Harold García</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!--#talleres-->

        </div><!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenido-programa-->
  </section><!--.programa-->


  <?php include_once 'includes/templates/invitados.php'; ?>  
  
  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> Talleres</li>
        <li><p class="numero"></p> Días</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix"> 
      <li>
        <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>	
          </ul>
        <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    
        <li>
        <div class="tabla-precio">
          <h3>Todos los días</h3>
          <p class="numero">$50</p>
          <ul>
          <li>Bocadillos Gratis</li>
          <li>Todas las conferencias</li>
          <li>Todos los talleres</li>	
          </ul>
        <a href="#" class="button">Comprar</a>
        </div>
      </li>
    
        <li>
        <div class="tabla-precio">
          <h3>Pase por 2 días</h3>
          <p class="numero">$45</p>
          <ul>
          <li>Bocadillos Gratis</li>
          <li>Todas las conferencias</li>
          <li>Todos los talleres</li>	
          </ul>
        <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>		
        
      </ul>
    </div>
    </section>
    
    <div id="mapa" class="mapa"></div>

    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
          <div class="testimonial">
              <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eum fuga earum quas suscipit assumenda ratione tempora consequatur provident, ducimus similique exercitationem saepe tempore numquam non commodi impedit neque cum.</p>
                  <footer class="info-testimonial clearfix">
                      <img src="img/testimonial.jpg" alt="imagen testimonial">
                      <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                  </footer>
              </blockquote>
          </div><!--.testimonial-->
          <div class="testimonial">
              <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eum fuga earum quas suscipit assumenda ratione tempora consequatur provident, ducimus similique exercitationem saepe tempore numquam non commodi impedit neque cum.</p>
                  <footer class="info-testimonial clearfix">
                      <img src="img/testimonial.jpg" alt="imagen testimonial">
                      <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                  </footer>
              </blockquote>
          </div><!--.testimonial-->
          <div class="testimonial">
              <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eum fuga earum quas suscipit assumenda ratione tempora consequatur provident, ducimus similique exercitationem saepe tempore numquam non commodi impedit neque cum.</p>
                  <footer class="info-testimonial clearfix">
                      <img src="img/testimonial.jpg" alt="imagen testimonial">
                      <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                  </footer>
              </blockquote>
          </div><!--.testimonial-->
      </div>
  </section> 

  <!--.newsletter-->
  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p> regístrate al newsletter:</p>
      <h3>gdlwebcamp</h3>
      <a href="registro.php" class="button transparente">Registro</a>
    </div>
  </div>

<!-- .Cuenta regresiva -->
<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li><p id="dias" class="numero"></p> días</li>
      <li><p id="horas" class="numero"></p> horas</li>
      <li><p id="minutos" class="numero"></p> minutos</li>
      <li><p id="segundos" class="numero"></p> segundos</li>
    </ul>
  </div>
</section>
<?php include_once 'includes/templates/footer.php';?>