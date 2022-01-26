<?php include_once './includes/templates/header.php'; ?>
        <!-- Sección Formulario -->
        <form id="registro" action="validar_registro.php" method="post">
            <section class="form-reservation">
                <h2>Registro de usuarios</h2>
                    <section class="reservation-user-data">
                        <div class="field-form">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" id="name" placeholder="Tu nombre">
                            <p class="error"></p>
                        </div>
                        <div class="field-form">
                            <label for="last_name">Apellido:</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Tu apellido">
                            <p class="error"></p>
                        </div>
                        <div class="field-form">
                            <label for="mail">Email:</label>
                            <input type="email" name="mail" id="mail" placeholder="Tu Email">
                            <p class="error"></p>
                        </div>
                    </section>
                <section id="paquetes" class="pack-reservation">
                    <h3>Elije el número de boletos</h3>
                    <section class="precios__container">
                        <article class="precio__container">
                            <h3>Pase por día (Viernes)</h3>
                            <p class="numero">$30</p>
                            <section>
                                <p><i class="bi bi-check-lg"></i>Bocadillos gratis</p>
                                <p><i class="bi bi-check-lg"></i>Todas las conferencias</p>
                                <p><i class="bi bi-check-lg"></i>Todos los talleres</p>
                            </section>
                            <section class="orden">
                                <label for="pase_dia">Boletos deseados:</label>
                                <input type="number" name="boletos[]" id="pase_dia" min="0" size="0" placeholder="0">
                            </section>
                        </article>
                        <article class="precio__container">
                            <h3>Todos los días</h3>
                            <p class="numero">$50</p>
                            <section>
                                <p><i class="bi bi-check-lg"></i>Bocadillos gratis</p>
                                <p><i class="bi bi-check-lg"></i>Todas las conferencias</p>
                                <p><i class="bi bi-check-lg"></i>Todos los talleres</p>
                            </section>
                            <section class="orden">
                                <label for="pase_completo">Boletos deseados:</label>
                                <input type="number" name="boletos[]" id="pase_completo" min="0" size="0" placeholder="0">
                            </section>
                        </article>
                        <article class="precio__container">
                            <h3>Pase por dos días (Vie. y Sab.)</h3>
                            <p class="numero">$45</p>
                            <section>
                                <p><i class="bi bi-check-lg"></i>Bocadillos gratis</p>
                                <p><i class="bi bi-check-lg"></i>Todas las conferencias</p>
                                <p><i class="bi bi-check-lg"></i>Todos los talleres</p>
                            </section>
                            <section class="orden">
                                <label for="pase_dosdias">Boletos deseados:</label>
                                <input type="number" name="boletos[]" id="pase_dosdias" min="0" size="0" placeholder="0">
                            </section>
                        </article>
                    </section>
                </section>
            </section>
            <!-- Sección Eventos -->
            <section id="eventos" class="events-reservation">
                <h3>Elije tus tálleres</h3>
                <div class="events__container">
                    <section id="viernes">
                        <h4>Viernes</h4>
                        <div class="day-event__container">
                            <article>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                                <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                                <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                                <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                            </article>
                            <article>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                                <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                                <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                            </article>
                            <article>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                            </article>
                        </div>
                    </section>
                    <section id="sabado">
                        <h4>Sábado</h4>
                        <div class="day-event__container">
                            <article>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                                <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                                <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                                <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                                <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                                <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                            </article>
                            <article>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                                <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                                <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                            </article>
                            <article>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                                <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                            </article>
                        </div>
                    </section>
                    <section id="domingo">
                        <h4>Domingo</h4>
                        <div class="day-event__container">
                            <article>
                                <p>Talleres:</p>
                                <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                                <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                                <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                                <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                                <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                            </article>
                            <article>
                                <p>Conferencias:</p>
                                <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                                <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                                <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                            </article>
                            <article>
                                <p>Seminarios:</p>
                                <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                                <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                            </article>
                        </div>
                    </section>
                </div>
            </section>
            <!-- Sección Checkout -->
            <section class="resume-reservation">
                <h3>Pago y extras</h3>
                <section class="resume__container">
                    <article class="extra">
                        <div class="orden"> 
                            <label for="camisa_evento">Camisa del evento $10 <small>(promocion 7% dto.)</small></label>
                            <input type="number" min="0" id="camisa_evento" name="pedido_camisas" size="3" placeholder="0">
                        </div>
                        <div class="orden"> 
                            <label for="etiquetas">Paquete de 10 etiquetas $2 <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
                            <input type="number" min="0" id="etiquetas" name="pedido_etiquetas" size="3" placeholder="0">
                        </div>
                        <div class="orden"> 
                            <label for="regalo">Seleccione un regalo</label>
                            <select id="regalo" name="regalo" required>
                                <option value="">- Seleccione un regalo -</option>
                                <option value="2">Etiquetas</option>
                                <option value="1">Pulsera</option>
                                <option value="3">Plumas</option>
                            </select>
                        </div>
                        <div class="orden boton"> 
                            <input type="button" id="calcular" class="button" value="Calcular">
                        </div>
                    </article>
                    <article class="total">
                        <p class="resumen">Resumen:</p>                       
                        <div id="lista-productos">
                        </div>                   
                        <p>Total:</p>
                        <div id="suma-total">
                        </div>
                        <input type="hidden" name="total_pedido" id="total_pedido">
                        <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                    </article>
                </section>
            </section>
        </form>
    </main>
<?php include_once './includes/templates/footer.php'; ?>