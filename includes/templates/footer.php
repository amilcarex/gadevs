<footer class="footer">
    <div id="mapa" class="mapa none"></div>
    <div class="footer-contenido">
        <div class="contenedor flex footer-contenido--alineacion">
            <div class="contenedor footer--contenido__segmento">
                <p class="titulo">Sobre <span>GA Devs</span></p>
                <p class="texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem quis molestiae, ea
                    eligendi vero debitis praesentium? Quae officia reprehenderit laudantium hic minus laboriosam
                    est dignissimos ratione aliquid, consequuntur voluptas optio?</p>
            </div>
            <div class="contenedor footer--contenido__segmento">
                <p class="titulo">Últimos <span>Tweets</span></p>
                <p class="texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. <span>#justo</span> Autem
                    quis molestiae, ea eligendi vero
                    debitis praesentium? <span>@justo</span> officia reprehenderit laudantium minus laboriosam est
                    dignissimos ratione aliquid,
                    consequuntur </p>
            </div>

            <div class="contenedor footer--contenido__segmento">
                <p class="titulo">Redes <span>Sociales</span></p>
                <div class="footer--iconos">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>


        </div>
    </div>
    <div class="footer-copyright contenedor">
        <p>Todos Los Derechos Reservados <span>GA Devs. 2021</span></p>

    </div>
</footer>





<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>

<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if ($pagina == 'invitados' || $pagina == 'index') {
    echo '<script src="js/jquery.colorbox-min.js"></script>';
} else if ($pagina == 'conferencia') {
    echo '<script src="js/lightbox.js"></script>';
}
?>




<script src="js/jquery.waypoints.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>