</main>
<footer class="index-footer">
        <section class="footer__container">
            <article class="information">
                <h3>Sobre <span>GdlWebCamp</span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati tempora accusamus recusandae error ipsa minus dolorem animi hic tenetur possimus quaerat veniam, nisi pariatur non id dolorum, optio iusto. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime obcaecati tempora accusamus recusandae error ipsa minus dolorem animi hic.</p>
            </article>
            <article class="tweets">
                <h3>Últimos <span>tweets</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ducimus ratione enim.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ducimus ratione enim.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa ducimus ratione enim.</p>
            </article>
            <article class="social">
                <h3>Redes <span>sociales</span></h3>
                <nav class="footer-social">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-pinterest"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </nav>
            </article>
        </section>
        <p class="copyright">
            Todos los derechos reservados GDLWEBCAMP 2021.
        </p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/js/jquery.lettering.js"></script>
    <script src="./assets/js/jquery.animateNumber.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/jquery.waypoints.min.js"></script>
    <?php 
        // Devuelve el nombre del archivo php
        $archivo = basename($_SERVER['PHP_SELF']);

        // Extraer la extension php del nombre del archivo
        $pagina = str_replace(".php", "", $archivo);
        
        if ($pagina == 'invitados' || $pagina == 'index') {
            echo '<script src="./assets/js/jquery.colorbox-min.js"></script>';
        } else if ($pagina == 'conferencia') {
            echo '<script src="./assets/js/lightbox.js"></script>';
        }       
    ?>      
    <script src="./assets/js/main.js"></script>
</body>
</html>