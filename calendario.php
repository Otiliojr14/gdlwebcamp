<?php include_once './includes/templates/header.php'; ?>
        <!-- Sección descripción corta -->
        <section class="calendar">
            <h2>Calendario de eventos</h2>
            <!-- Consulta a la base de datos -->
            <?php 
                try {
                    require_once('./includes/functions/bd_conexion.php');
                    $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.categoria_id = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_invitado = invitados.invitado_id ";
                    $sql .= " ORDER BY evento_id ";
                    $resultado = $conn->query($sql);
                } catch (\Exception $e) {
                    $e->getMessage();
                }
            ?>
            <section class="calendar-container">
                <?php 
                
                $calendario = array();
                // Filtrando los registros por dias
                while ($eventos = $resultado->fetch_assoc()) {

                    $fecha = $eventos['fecha_evento'];

                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => $eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );

                    $calendario[$fecha][] = $evento;

                }
                
                ?>

                <!-- Imprimiendo los registros de dias por seccion -->
                <?php foreach ($calendario as $dia => $lista_eventos): ?>

                <section class="day">
                    <!-- Encabezado dia -->
                    <div class="day-title">
                        <h3><i class="bi bi-calendar-event-fill"></i>
                        <?php echo utf8_encode(strftime("%A, %d de %B del %Y", strtotime($dia))) ?></h3>
                    </div>
                    <!-- Contenedor de eventos del dia -->
                    <div class="day-events">
                    <?php foreach ($lista_eventos as $evento): ?>
                        <article class="event">
                            <p class="title"><?php echo $evento['titulo']; ?></p>
                            <p class="hora"><i class="bi bi-clock-fill"></i><?php echo $evento['fecha'] . " " . $evento['hora']; ?></p>
                            <p><i class="bi bi-<?php echo $evento['icono']; ?>"></i><?php echo $evento['categoria']; ?></p>
                            <p class="ponente"><i class="bi bi-person-fill"></i><?php echo $evento['invitado']; ?></p>
                        </article>
                    <?php endforeach; ?>
                    </div>                    
                </section>
                <?php endforeach; ?>              
            </section>
        </section>
        
        <?php $conn->close(); ?>
<?php include_once './includes/templates/footer.php'; ?>