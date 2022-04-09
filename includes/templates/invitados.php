<?php
try {
    require 'includes/functions/db.php';
    $sql = "SELECT * FROM invitados";

    $resultado = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}

?>

<section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">

        <?php while ($invitados = $resultado->fetch_assoc()) :
            $invitado = array(
                'id' => $invitados['invitado_id'],
                'nombre' => $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'],
                'descripcion' => $invitados['descripcion'],
                'imagen' => $invitados['url_imagen']

            );

        ?>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado<?php echo $invitado['id']; ?>">
                        <img src="img/<?php echo $invitado['imagen'];  ?>" alt="<?php echo "Invitado: " . $invitado['nombre']; ?>">
                        <p><?php echo $invitado['nombre']; ?></p>
                    </a>
                </div>
            </li>
            <div class="none">
                <div class="invitado-info" id="invitado<?php echo $invitado['id']; ?>">

                    <h2><?php echo $invitado['nombre']; ?></h2>
                    <img src="img/<?php echo $invitado['imagen'];  ?>" alt="<?php echo "Invitado: " . $invitado['nombre']; ?>">
                    <p> <?php echo $invitado['descripcion']; ?></p>

                </div>
            </div>


        <?php endwhile; ?>


    </ul>
</section>


<?php

$conn->close();
?>