<?php include_once './includes/templates/header.php'; ?>
        <!-- Sección descripción corta -->
        <section class="description-event">
            <h2>La mejor conferencia de diseño web en español</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, numquam? Perspiciatis quisquam rerum laborum facere pariatur, aut ratione distinctio doloribus culpa suscipit, necessitatibus eos facilis error accusamus temporibus similique voluptates.</p>
        </section>
        <!-- Sección conferencias -->
        <section class="programa-conferencias">
            <section class="video-section">
                <video autoplay loop poster="./assets/img/bg-talleres.jpg">
                    <source src="./assets/video/video.mp4" type="video/mp4">
                    <source src="./assets/video/video.ogv" type="video/ogv">
                    <source src="./assets/video/video.webm" type="video/webm">
                </video>
            </section>
            <section class="content-section">
                <section class="content">
                    <aside class="content-programa">
                        <h2>Programa del evento</h2>
                        <?php $categorias = CategoriaEvento::find_all(); ?>
                        <nav class="programa__nav">
                            <?php foreach ($categorias as $categoria) :?>
                                <a href="#<?php echo strtolower($categoria->__get('cat_evento')); ?>">
                                <i class="bi bi-<?php echo $categoria->__get('icono'); ?>"></i><?php echo $categoria->__get('cat_evento'); ?></a>
                            <?php endforeach; ?>
                        </nav>
                        <!-- Pendiente imprimir estos valores desde la base de datos -->
                        <article id="talleres" class="ocultar">
                            <section class="detail-event">
                                <h3>HTML5, CSS3 y JavaScript</h3>
                                <p><i class="bi bi-clock-fill"></i>16:00 hrs</p>
                                <p><i class="bi bi-calendar-fill"></i>10 de Dic</p>
                                <p><i class="bi bi-person-fill"></i>Juan Pablo De la Torre Valdez</p>
                            </section>
                            <section class="detail-event">
                                <h3>Responsive Web Design</h3>
                                <p><i class="bi bi-clock-fill"></i>20:00 hrs</p>
                                <p><i class="bi bi-calendar-fill"></i>10 de Dic</p>
                                <p><i class="bi bi-person-fill"></i>Juan Pablo De la Torre Valdez</p>
                            </section>
                            <a href="#" class="button">Ver todos</a>
                        </article>
                        <article id="conferencias" class="ocultar">
                            <section class="detail-event">
                                <h3>Como ser freelancer</h3>
                                <p><i class="bi bi-clock-fill"></i>10:00 hrs</p>
                                <p><i class="bi bi-calendar-fill"></i>10 de Dic</p>
                                <p><i class="bi bi-person-fill"></i>Gregorio Sánchez</p>
                            </section>
                            <section class="detail-event">
                                <h3>Tecnologias del futuro</h3>
                                <p><i class="bi bi-clock-fill"></i>17:00 hrs</p>
                                <p><i class="bi bi-calendar-fill"></i>10 de Dic</p>
                                <p><i class="bi bi-person-fill"></i>Susan Sánchez</p>
                            </section>
                            <a href="#" class="button">Ver todos</a>
                        </article>
                        <article id="seminarios" class="ocultar">
                            <section class="detail-event">
                                <h3>Diseño UI/UX para moviles</h3>
                                <p><i class="bi bi-clock-fill"></i>17:00 hrs</p>
                                <p><i class="bi bi-calendar-fill"></i>10 de Dic</p>
                                <p><i class="bi bi-person-fill"></i>Harold Garcia</p>
                            </section>
                            <section class="detail-event">
                                <h3>Aprende a programar en una mañana</h3>
                                <p><i class="bi bi-clock-fill"></i>10:00 hrs</p>
                                <p><i class="bi bi-calendar-fill"></i>10 de Dic</p>
                                <p><i class="bi bi-person-fill"></i>Susana Rivera</p>
                            </section>
                            <a href="#" class="button">Ver todos</a>
                        </article>                        
                    </aside>
                </section>                
            </section>            
        </section>
        <!-- Sección invitados -->
        <?php include_once './includes/templates/invitados.php'; ?>
        <!-- Sección contador -->
        <section class="index-contador">
            <section class="contador__content">
                <article>
                    <h1>0</h1>
                    <p>Invitados</p>
                </article>
                <article>
                    <h1>0</h1>
                    <p>Talleres</p>
                </article>
                <article>
                    <h1>0</h1>
                    <p>Días</p>
                </article>
                <article>
                    <h1>0</h1>
                    <p>Conferencias</p>
                </article>
            </section>
        </section>
        <!-- Sección precios -->
        <section class="index-precios">
            <h2>Precios</h2>
            <section class="precios__container">
                <article class="precio__container">
                    <h3>Pase por día</h3>
                    <p class="numero">$30</p>
                    <section>
                        <p><i class="bi bi-check-lg"></i>Bocadillos gratis</p>
                        <p><i class="bi bi-check-lg"></i>Todas las conferencias</p>
                        <p><i class="bi bi-check-lg"></i>Todos los talleres</p>
                    </section>
                    <a href="#" class="button hollow">Comprar</a>
                </article>
                <article class="precio__container">
                    <h3>Todos los días</h3>
                    <p class="numero">$50</p>
                    <section>
                        <p><i class="bi bi-check-lg"></i>Bocadillos gratis</p>
                        <p><i class="bi bi-check-lg"></i>Todas las conferencias</p>
                        <p><i class="bi bi-check-lg"></i>Todos los talleres</p>
                    </section>
                    <a href="#" class="button">Comprar</a>
                </article>
                <article class="precio__container">
                    <h3>Pase por dos días</h3>
                    <p class="numero">$45</p>
                    <section>
                        <p><i class="bi bi-check-lg"></i>Bocadillos gratis</p>
                        <p><i class="bi bi-check-lg"></i>Todas las conferencias</p>
                        <p><i class="bi bi-check-lg"></i>Todos los talleres</p>
                    </section>
                    <a href="#" class="button hollow">Comprar</a>
                </article>
            </section>
        </section>
        <!-- Sección Google Maps -->
        <section class="index-map" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.8815046504214!2d-103.3896014857396!3d20.674399305158257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1fb67ef00ad%3A0x565792d14c620e!2sMinerva%20Roundabout!5e0!3m2!1sen!2smx!4v1636915376473!5m2!1sen!2smx" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!-- Sección Testimonios -->
        <section class="index-testimoniales">
            <h2>Testimoniales</h2>
            <section class="testimoniales__container">
                <article class="testimonial">
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quo necessitatibus saepe esse labore tempore ullam autem vel quae sunt reprehenderit, dolorem enim, numquam quis odit et iste? Animi, obcaecati?"</p>
                    </blockquote>
                    <section>
                        <figure>
                            <img src="./assets/img/testimonial.jpg" alt="Testimonial Foto">
                        </figure>
                        <p><cite class="author">Oswaldo Aponte Escobedo</cite>
                            <cite>Diseñador en @prisma</cite>
                        </p>
                    </section>
                </article>
                <article class="testimonial">
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quo necessitatibus saepe esse labore tempore ullam autem vel quae sunt reprehenderit, dolorem enim, numquam quis odit et iste? Animi, obcaecati?"</p>
                    </blockquote>
                    <section>
                        <figure>
                            <img src="./assets/img/testimonial.jpg" alt="Testimonial Foto">
                        </figure>
                        <p><cite class="author">Oswaldo Aponte Escobedo</cite>
                            <cite>Diseñador en @prisma</cite>
                        </p>
                    </section>
                </article>
                <article class="testimonial">
                    <blockquote>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quo necessitatibus saepe esse labore tempore ullam autem vel quae sunt reprehenderit, dolorem enim, numquam quis odit et iste? Animi, obcaecati?"</p>
                    </blockquote>
                    <section>
                        <figure>
                            <img src="./assets/img/testimonial.jpg" alt="Testimonial Foto">
                        </figure>
                        <p><cite class="author">Oswaldo Aponte Escobedo</cite>
                            <cite>Diseñador en @prisma</cite>
                        </p>
                    </section>
                </article>
            </section>
            
        </section>
        <!-- Sección Newsletter -->
        <section class="index-newsletter">
            <section class="newsletter__container">
                <p>regístrate al newsletter</p>
                <h3>GdlWebCamp</h3>
                <a href="#" class="button transparent">Registro</a>
            </section>
        </section>
        <!-- Sección Contador Tiempo -->
        <section class="index-contador-tiempo">
            <h2>Faltan</h2>
            <section class="tiempo__content">
                <article>
                    <h1 id="dias"></h1>
                    <p>Días</p>
                </article>
                <article>
                    <h1 id="horas"></h1>
                    <p>Horas</p>
                </article>
                <article>
                    <h1 id="minutos"></h1>
                    <p>Minutos</p>
                </article>
                <article>
                    <h1 id="segundos"></h1>
                    <p>Segundos</p>
                </article>
            </section>
        </section>
        <!-- Sección Contador Tiempo -->
<?php include_once './includes/templates/footer.php'; ?>