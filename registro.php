<?php include 'includes/templates/header.php' ?>

<section class="seccion contenedor">
    <div class="registro-fallido">
        <?php if (isset($_GET['failed']) && ($_GET['failed'] == 1)) : ?>

            <p class="fallo alerta-registro alerta--registro__fallido">Parece que ha habido un problema con tu Registro, Porfavor intente nuevamente y recuerde completar los campos obligatorios</p>

        <?php endif; ?>
    </div>
    <h2>Registro de Usuarios</h2>
    <form action="validar_registro.php" method="POST" id="registro" class="registro">
        <div id="datos_usuario" class="registro  grid">
            <div class="campo campo-nombre flex">
                <label for="nombre">* Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre">
            </div>
            <div class="campo campo-apellido flex">
                <label for="apellido">* Apellido:</label>
                <input type="text" name="apellido" id="apellido" placeholder="Tu Apellido">
            </div>
            <div class="campo campo-email flex">
                <label for="email">* E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Tu E-mail">
            </div>
            <div id="error" class="errores"></div>

        </div>
        <!--Datos Usuario-->
        <div class="paquetes" id="paquetes">
            <h3>Elige el Número de Boletos *</h3>
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por Día (Viernes)</h3>
                        <p class="numero">30$</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <div class="orden">
                            <label for="pase_dia">Boletos Deseados:</label>
                            <input type="number" name="boletos[]" min="0" id="pase_dia" size="3" placeholder="0">
                        </div>
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
                        <div class="orden">
                            <label for="pase_completo">Boletos Deseados:</label>
                            <input type="number" name="boletos[]" min="0" id="pase_completo" size="3" placeholder="0">
                        </div>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por 2 Días (Viernes y Sábado)</h3>
                        <p class="numero">45$</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <div class="orden">
                            <label for="pase_dosdias">Boletos Deseados:</label>
                            <input type="number" name="boletos[]" min="0" id="pase_dosdias" size="3" placeholder="0">
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- Paquetes -->
        <div id="eventos" class="eventos clearfix">
            <h3>Elige tus talleres *</h3>
            <div class="caja">
                <div id="viernes" class="contenido-dia  none clearfix">
                    <h4>Viernes</h4>
                    <div class="talleres">
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time>
                            Responsive Web Design</label>
                        <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time>
                            Flexbox</label>
                        <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time>
                            HTML5 y CSS3</label>
                        <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time>
                            Drupal</label>
                        <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time>
                            WordPress</label>
                    </div>
                    <div class="conferencias">
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser
                            Freelancer</label>
                        <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time>
                            Tecnologías del Futuro</label>
                        <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time>
                            Seguridad en la Web</label>
                    </div>
                    <div class="seminarios">
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI
                            y UX para móviles</label>
                    </div>
                </div>
                <!--#viernes-->

                <div id="sabado" class="contenido-dia  none clearfix">
                    <h4>Sábado</h4>
                    <div class="talleres">
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time>
                            AngularJS</label>
                        <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP
                            y MySQL</label>
                        <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time>
                            JavaScript Avanzado</label>
                        <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO
                            en Google</label>
                        <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De
                            Photoshop a HTML5 y CSS3</label>
                        <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP
                            Medio y Avanzado</label>
                    </div>
                    <div class="conferencias">
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como
                            crear una tienda online que venda millones en pocos días</label>
                        <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los
                            mejores lugares para encontrar trabajo</label>
                        <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos
                            para crear un negocio rentable</label>
                    </div>
                    <div class="seminarios">
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a
                            Programar en una mañana</label>
                        <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI
                            y UX para móviles</label>
                    </div>
                </div>
                <!--#sabado-->
                <div id="domingo" class="contenido-dia  none clearfix">
                    <h4>Domingo</h4>
                    <div class="talleres">
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time>
                            Laravel</label>
                        <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea
                            tu propia API</label>
                        <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time>
                            JavaScript y jQuery</label>
                        <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time>
                            Creando Plantillas para WordPress</label>
                        <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time>
                            Tiendas Virtuales en Magento</label>
                    </div>
                    <div class="conferencias">
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como
                            hacer Marketing en línea</label>
                        <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que
                            lenguaje debo empezar?</label>
                        <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time>
                            Frameworks y librerias Open Source</label>
                    </div>
                    <div class="seminarios">
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando
                            una App en Android en una tarde</label>
                        <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando
                            una App en iOS en una tarde</label>
                    </div>
                </div>
                <!--#domingo-->
            </div>
            <!--.caja-->
        </div>
        <!--#eventos-->
        <div class="mapa none" id="mapa"></div>
        <div class="resumen" id="resumen">
            <h3>Pago y Extra</h3>
            <div class="caja flex resumen-pago clearfix">
                <div class="extras">
                    <div class="orden">
                        <label for="camisa-evento">Camisa del evento $10 <small> (Promoción 7% de descuento)</small></label>
                        <input type="number" name="pedido_camisas" id="camisa-evento" min="0" size="3" placeholder="0">
                    </div>
                    <div class="orden">
                        <label for="etiquetas">Paquete de 10 Etiquetas $2 <small> (HTML5, CSS3, JavaScript, Chrome)</small></label>
                        <input type="number" name="pedido_etiquetas" id="etiquetas" min="0" size="3" placeholder="0">
                    </div>
                    <div class="orden">
                        <label for="regalo">Seleccione un Regalo *</label>
                        <select name="regalo" id="regalo">
                            <option value="">Seleccione un Regalo</option>
                            <option value="2">Etiquetas</option>
                            <option value="1">Pulsera</option>
                            <option value="3">Plumas</option>
                        </select>
                    </div>
                    <input type="button" value="Calcular" class="button" id="calcular" name="calcular">
                </div><!-- EXTRAS -->
                <div class="total">
                    <p>Resumen:</p>
                    <div id="lista-productos" class="lista-productos">

                    </div>
                    <p>Total:</p>
                    <div id="suma-total" class="suma-total"></div>
                    <input type="hidden" name="total_pedido" id="total_pedido">
                    <input type="submit" name="submit" value="Pagar" id="btnRegistro" class="button">
                </div>
            </div>
        </div>
    </form>
</section>

<?php include 'includes/templates/footer.php' ?>