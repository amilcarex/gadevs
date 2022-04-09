<?php




include 'includes/templates/header.php'

?>


<section class="seccion contenedor">
  <h2>El Mejor Equipo de Trabajo para tus Desarrollos Web</h2>
  <p class="texto-resumen">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nemo alias tempora aliquid reiciendis minima
    dolor, rem doloribus facere error sequi, placeat ad, recusandae eius iusto esse omnis itaque! Maiores? Lorem ipsum
    dolor sit amet consectetur, adipisicing elit. Omnis odio minus a doloremque reprehenderit magni quaerat
    voluptatem, maxime praesentium blanditiis hic iure et, consequuntur, laudantium quos dignissimos inventore sunt
    in.</p>
</section>
<section class="programa">
  <div class="contenedor contenido-video">
    <video autoplay="autoplay" muted loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogg">


    </video>
  </div>
  <!--Contenedor Video-->

  <div class="contenido-programa">

    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del Evento</h2>


        <?php
        try {
          require 'includes/functions/db.php';
          $sql = "SELECT * FROM categoria_evento ORDER BY id_categoria DESC";


          $resultado = $conn->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

        ?>
        <nav class="menu-programa">
          <?php
          while ($cat = $resultado->fetch_assoc()) :
            $datos = array(
              'categoria' => $cat['cat_evento'],
              'icono' => "fa " . $cat['icono']
            )
          ?>
            <a href="#<?php echo strtolower($datos['categoria']); ?>"><i class="<?php echo $datos['icono']; ?>"></i><?php echo $datos['categoria']; ?></a>


          <?php

          endwhile;
          ?>

        </nav>

        <?php
        try {
          require 'includes/functions/db.php';
          $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= "FROM eventos ";
          $sql .= "INNER JOIN categoria_evento ";
          $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= "INNER JOIN invitados ";
          $sql .= "ON eventos.id_inv = invitados.invitado_id ";
          $sql .= "AND eventos.id_cat_evento = 3 ";
          $sql .= "ORDER BY evento_id LIMIT 2;";
          $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= "FROM eventos ";
          $sql .= "INNER JOIN categoria_evento ";
          $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= "INNER JOIN invitados ";
          $sql .= "ON eventos.id_inv = invitados.invitado_id ";
          $sql .= "AND eventos.id_cat_evento = 2 ";
          $sql .= "ORDER BY evento_id LIMIT 2;";
          $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= "FROM eventos ";
          $sql .= "INNER JOIN categoria_evento ";
          $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= "INNER JOIN invitados ";
          $sql .= "ON eventos.id_inv = invitados.invitado_id ";
          $sql .= "AND eventos.id_cat_evento = 1 ";
          $sql .= "ORDER BY evento_id LIMIT 2;";
        } catch (\Exception $e) {
          echo $e->getMessage();
        }

        ?>

        <?php $conn->multi_query($sql); ?>

        <?php do {
          $resultado = $conn->store_result();
          $row = $resultado->fetch_all(MYSQLI_ASSOC);
        ?>
          <?php $i = 0; ?>
          <?php foreach ($row as $evento) :
            $datosEvento = array(
              'titulo' => $evento['nombre_evento'],
              'nombre' => $evento['nombre_invitado'] . " " . $evento['apellido_invitado'],
              'hora' => $evento['hora_evento'],
              'fecha' => $evento['fecha_evento']

            )
          ?>
            <?php if ($i % 2 == 0) : ?>
              <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso none clearfix">
              <?php endif;  ?>
              <div class="detalle-evento">
                <h3><?php echo $datosEvento['titulo']; ?></h3>
                <p><i class="fas fa-clock"></i><?php echo $datosEvento['hora']; ?></p>
                <p><i class="fas fa-calendar"></i><?php echo $datosEvento['fecha']; ?></p>
                <p><i class="fas fa-user"></i><?php echo $datosEvento['nombre']; ?></p>
              </div>


              <?php if ($i % 2 == 1) : ?>
                <a href="" class="button float-right">Ver Todos</a>
              </div>
            <?php endif; ?>
            <?php $i++; ?>
          <?php endforeach; ?>
          <?php $resultado->free(); ?>
        <?php
        } while ($conn->more_results() && $conn->next_result()); ?>





      </div>
    </div>
  </div>
</section>

<?php include 'includes/templates/invitados.php' ?>




<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero">0</p>Invitados
      </li>
      <li>
        <p class="numero">0</p>Talleres
      </li>
      <li>
        <p class="numero">0</p>Dias
      </li>
      <li>
        <p class="numero">0</p>Conferencias
      </li>
    </ul>
  </div>
</div>

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase Por Día</h3>
          <p class="numero">30$</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
            <li><i class="fas fa-check"></i>Todos los Talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>

      <li>
        <div class="tabla-precio">
          <h3>Todos Los Días</h3>
          <p class="numero">50$</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
            <li><i class="fas fa-check"></i>Todos los Talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>

      <li>
        <div class="tabla-precio">
          <h3>Pase Por 2 Días</h3>
          <p class="numero">45$</p>
          <ul>
            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
            <li><i class="fas fa-check"></i>Todos los Talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<div id="mapa" class="mapa">

</div>
<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo eum in, officiis reiciendis sit. Eum esse similique voluptas labore laborum tempora, nobis corporis quas, eos nesciunt impedit pariatur ex?</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Oswaldo Aponte Rodriguez <span>Diseñador en GA Devs</span></cite>
        </footer>
      </blockquote>
    </div><!-- Fin del Testimonial -->
    <div class="testimonial">
      <blockquote>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo eum in, officiis reiciendis sit. Eum
          esse similique voluptas labore laborum tempora, nobis corporis quas, eos nesciunt impedit pariatur ex?</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Oswaldo Aponte Rodriguez<span>Diseñador en GA Devs</span></cite>
        </footer>
      </blockquote>
    </div><!-- Fin del Testimonial -->
    <div class="testimonial">
      <blockquote>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo eum in, officiis reiciendis sit. Eum
          esse similique voluptas labore laborum tempora, nobis corporis quas, eos nesciunt impedit pariatur ex?</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen Testimonial">
          <cite>Oswaldo Aponte Rodriguez<span>Diseñador en GA Devs</span></cite>
        </footer>
      </blockquote>
    </div><!-- Fin del Testimonial -->
  </div>
</section>


<div class="newsletter parallax">

  <div class="contenido contenedor">
    <p>Registrate al Newsletter</p>
    <h3>GA Devs</h3>
    <a href="#" class="button transparente">Registro</a>
  </div>
</div>

<section class="seccion">

  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p>Días
      </li>
      <li>
        <p id="horas" class="numero"></p>Horas
      </li>
      <li>
        <p id="minutos" class="numero"></p>Minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p>Segundos
      </li>
    </ul>
  </div>
</section>

<?php include 'includes/templates/footer.php' ?>