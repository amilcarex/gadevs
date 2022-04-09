  <?php if (isset($_POST['submit'])) :


        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $regalo = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');
        $boletos = $_POST['boletos'];
        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];
        include_once 'includes/functions/funciones.php';
        $pedido = productos_json($boletos, $camisas, $etiquetas);
        $eventos = $_POST['registro'];

       


        try {
            if (empty($nombre) || empty($apellido) || empty($email) || empty($total) || empty($boletos)) {
                header('location: registro.php?failed=1');
            }else{
            require 'includes/functions/db.php';
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('location: validar_registro.php?registrado=1');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }


    ?>

  <?php endif; ?>


  <?php include_once 'includes/templates/header.php'; ?>


  <section class="seccion contenedor">
      <h2>Resumen Registro</h2>



      <div class="registrado relativa grid ">


          <?php if (isset($_GET['registrado']) && ($_GET['registrado'] == 1)) : ?>

              <p class="alerta-registro alerta--registro__exitoso">Tu Registro se ha Realizado Satisfactoriamente</p>
              <div class=" <?php echo "exito"; ?>"></div>
              <div class="mensaje-bienvenida">
                  <p class="mensaje">Te estaremos esperando, Disfruta de los eventos y todos los beneficios que conllevan.</p>
                  <p>Para Volver haz click <span><a href="index.php">Aquí</a> </span></p>
              </div>



          <?php endif; ?>



      </div>


  </section>


  <?php include_once 'includes/templates/footer.php'; ?>